const likeContainer = document.getElementsByClassName('like-container')

Array.from(likeContainer).forEach((element, i) => {
    axios.get("/countlike/"+ element.getElementsByTagName('p')[1].innerHTML)
        .then(function(res){
            element.getElementsByTagName('p')[0].innerHTML = res.data.data
        })
    axios.get("/checkAkunLike/"+ element.getElementsByTagName('p')[1].innerHTML+ "/" + document.getElementById('id-user-login').value)
        .then(function(res){
            console.log(res.data);
            if (res.data.data) {
                element.getElementsByTagName('img')[0].classList.add('hidden')
                element.getElementsByTagName('img')[1].classList.remove('hidden')
            }
        })
    element.addEventListener('click', () => {
        let sumLike = element.getElementsByTagName('p')[0].innerHTML
        let formDataLike = new FormData()
        formDataLike.append("userId", document.getElementById('id-user-login').value)
        formDataLike.append("tweetId", element.getElementsByTagName('p')[1].innerHTML )

        if (element.getElementsByTagName('img')[1].classList.contains('hidden')) {
            let urlLIke = document.getElementById('like-url').value
                axios.post(urlLIke, formDataLike)
                    .then(function(res){
                        console.log(res.data);
                        if(res.data.status){
                            element.getElementsByTagName('img')[0].classList.add('hidden')
                            element.getElementsByTagName('img')[1].classList.remove('hidden')
                            element.getElementsByTagName('p')[0].innerHTML = parseInt(sumLike) + 1;
                        }

                    })

        } else {
            let urlDisLIke = document.getElementById('dislike-url').value
                axios.post(urlDisLIke, formDataLike)
                    .then(function(res){
                        console.log(res.data);
                        element.getElementsByTagName('img')[0].classList.remove('hidden')
                        element.getElementsByTagName('img')[1].classList.add('hidden')
                        element.getElementsByTagName('p')[0].innerHTML = parseInt(sumLike) - 1;
                    })
        }

    });
});