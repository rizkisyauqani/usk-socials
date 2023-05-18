const d = new Date();
        const messages = document.getElementById("messages");
        messages.scrollTo(0, messages.scrollHeight);
        let indexListUserActive = 0;
        let roomid = 0;
        const backChat = document.getElementById("back-chat");

        backChat.addEventListener('click', ()=>{
            const bannerChat = document.getElementById("banner-chat");
            const sidebarChat = document.getElementById("sidebar-chat");
            if (!bannerChat.classList.contains('lg:block')){
                bannerChat.classList.add('lg:block')
            }
            if (sidebarChat.classList.contains('lg:block')){
                sidebarChat.classList.remove('hidden')
                sidebarChat.classList.remove('lg:block')
            }
            const showMessegeLayer = document.getElementById("show-messege-layer");
            if (!showMessegeLayer.classList.contains("hidden")){
                showMessegeLayer.classList.add("hidden")
            }
            document.getElementsByClassName("user-list")[indexListUserActive].classList.remove('user-chat-active')
            document.getElementsByClassName("user-list")[indexListUserActive].classList.add('user-chat')
            indexListUserActive = 0;
            roomid = 0;
        })

        function addLeftChat(friendName, message, time) {
            let html =  ' <div class="flex mb-2">' +
                        '     <div class="rounded-tr-[25px] rounded-bl-[25px] py-2 px-3" style="background-color: #F2F2F2">' +
                        '         <p class="text-sm text-emerald-500 font-semibold">' +
                                    friendName +
                        '         </p>' +
                        '         <p class="text-sm mt-1">' +
                                      message +
                        '         </p>' +
                        '         <p class="text-left text-xs text-grey-dark mt-1">' +
                                      time  +
                        '         </p>' +
                        '     </div>' +
                        ' </div>';
            messages.innerHTML = messages.innerHTML + html;
        }

        function showHiddenChatArea(element, i) {
            const bannerChat = document.getElementById("banner-chat");
            const sidebarChat = document.getElementById("sidebar-chat");
            if (bannerChat.classList.contains('lg:block')){
                bannerChat.classList.remove('lg:block')
            }
            if (!sidebarChat.classList.contains('lg:block')){
                sidebarChat.classList.add('hidden')
                sidebarChat.classList.add('lg:block')
            }
            const showMessegeLayer = document.getElementById("show-messege-layer");
            if (showMessegeLayer.classList.contains("hidden")){
                showMessegeLayer.classList.remove("hidden")
            }
            messages.scrollTo(0, messages.scrollHeight);
            document.getElementsByClassName("user-list")[indexListUserActive].classList.remove('user-chat-active')
            document.getElementsByClassName("user-list")[indexListUserActive].classList.add('user-chat')

            element.classList.remove('user-chat')
            element.classList.add('user-chat-active')
            indexListUserActive = i
            const photoFriend = document.getElementById("photo-friend");
            const nameFriend = document.getElementById("name-friend");
            photoFriend.src = element.getElementsByTagName("img")[0].src;
            nameFriend.innerText = element.getElementsByTagName("p")[0].innerText;
        }



        const buttomInputMessage = document.getElementById('buttom-input-message')
        buttomInputMessage.addEventListener('click', () => {
            const formInputMessage = document.getElementById("form-input-message");
            let url = document.getElementById('create-chat-url').value
            let formData = new FormData();
            formData.append("roomId", roomid);
            formData.append("message", formInputMessage.value)

            axios.post(url, formData)
                .then(function (res) {
                    let html =  ' <div class="flex justify-end mb-2"> ' +
                        '     <div class="rounded-br-[25px] rounded-tl-[25px] py-2 px-3 ml-4" style="background-color: #E2F7CB"> ' +
                        '         <p class="text-sm mt-1"> ' +
                        formInputMessage.value +
                        '         </p> ' +
                        '         <p class="text-right text-xs text-grey-dark mt-1"> ' +
                                    d.getHours()+":"+d.getMinutes() +
                        '         </p> ' +
                        '     </div> ' +
                        ' </div> ';

                    messages.innerHTML = messages.innerHTML + html;
                    messages.scrollTo(0, messages.scrollHeight);
                    formInputMessage.value = ""
                })
        })

        Array.from(document.getElementsByClassName("user-list")).forEach((element, i) => {

            element.addEventListener("click", () => {

                let url = document.getElementById('room-url').value
                let formData = new FormData();
                    formData.append("me", document.getElementById('id-user-login').value);
                    formData.append("friend_id", element.getElementsByTagName("p")[1].innerText)

                axios.post(url, formData)
                    .then(function (res){
                        let room = res.data.data
                        roomid = room.id
                        Echo.join(`chat.${room.id}`)
                            .here((users) => {
                                console.log('berhasil join'+ room.id);
                            })
                            .listen("SendMessage", (e) => {
                                console.log(e)
                                let friendId = element.getElementsByTagName("p")[1].innerText
                                let friendName = element.getElementsByTagName("p")[0].innerText
                                if (e.userId == friendId){
                                    addLeftChat(friendName ,e.message, d.getHours()+":"+d.getMinutes())
                                }
                            })
                            .joining((user) => {
                                console.log(user.name);
                            })
                            .leaving((user) => {
                                console.log(user.name);
                            })
                            .error((error) => {
                                console.error(error);
                            });
                        messages.innerHTML = null;
                        showHiddenChatArea(element, i)
                        loadMessage(room.id, element.getElementsByTagName("p")[1].innerText, element.getElementsByTagName("p")[0].innerText)
                    })
            });
        });

        function loadMessage(roomId, friendId, friendName) {
            let url = "/messages/load/" + roomId
            axios.get(url)
                .then(function (res){
                    let data = res.data.data;
                    if (data.length > 0) {
                        data.forEach(function (value){
                            if (value.user_id == friendId) {
                                let formatDate = new Date(value.created_at)
                                addLeftChat(friendName, value.message, formatDate.getHours()+":"+formatDate.getMinutes())
                            } else {
                                let formatDate = new Date(value.created_at)
                                let html =  ' <div class="flex justify-end mb-2"> ' +
                                            '     <div class="rounded-br-[25px] rounded-tl-[25px] py-2 px-3 ml-4" style="background-color: #E2F7CB"> ' +
                                            '         <p class="text-sm mt-1"> ' + value.message +
                                            '         </p> ' +
                                            '         <p class="text-right text-xs text-grey-dark mt-1"> ' +
                                                        formatDate.getHours()+":"+formatDate.getMinutes() +
                                            '         </p> ' +
                                            '     </div> ' +
                                            ' </div> ';

                                messages.innerHTML = messages.innerHTML + html;
                            }
                        })
                        messages.scrollTo(0, messages.scrollHeight)
                    }
                })
        }



