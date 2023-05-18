// //sidebar
// const dropdownBtn = document.querySelector(".dropdown-btn");
// const dropdownContainer = document.querySelector(".dropdown-container");

// dropdownBtn.addEventListener("click", function () {
//     dropdownContainer.classList.toggle("hidden");
// });

//main-content
const tweetBox = document.querySelector("textarea");
// const textAlignBtn = document.querySelectorAll(".extra-options-content img");
const likeBtns = document.querySelectorAll(".like-container img");
const likeNumber = document.querySelector(".like-container p");

// textAlignBtn[2].addEventListener("click", function () {
//     if (tweetBox.classList.contains("text-left")) {
//         tweetBox.classList.remove("text-left");
//         tweetBox.classList.add("text-center");
//         tweetBox.focus();
//     } else if (tweetBox.classList.contains("text-center")) {
//         tweetBox.classList.remove("text-center");
//         tweetBox.classList.add("text-right");
//         tweetBox.focus();
//     } else if (tweetBox.classList.contains("text-right")) {
//         tweetBox.classList.remove("text-right");
//         tweetBox.classList.add("text-left");
//         tweetBox.focus();
//     }
// });

let number = "";

likeBtns[0].addEventListener("click", function () {

    if (
        !likeBtns[0].classList.contains("hidden") &&
        likeBtns[1].classList.contains("hidden")
    ) {
        likeBtns[0].classList.add("hidden");
        likeBtns[1].classList.remove("hidden");
    }
});

likeBtns[1].addEventListener("click", function () {

    if (
        likeBtns[0].classList.contains("hidden") &&
        !likeBtns[1].classList.contains("hidden")
    ) {
        likeBtns[0].classList.remove("hidden");
        likeBtns[1].classList.add("hidden");
    }
});

//gifs
// const gifSelectorIcon = document.getElementById("gifSelectorIcon");
// const gifSelector = document.getElementById("gifSelector");
// const gifSearch = document.getElementById("gifSearch");
// const gifList = document.getElementById("gifList");

// gifSelectorIcon.addEventListener("click", function () {
//     if (gifSelector.classList.contains("w-0", "h-0")) {
//         gifSelector.classList.remove("w-0", "h-0");
//         gifSelector.classList.add("w-60", "h-40");
//         if (emojiSelector.classList.contains("w-52", "h-40")) {
//             emojiSelector.classList.remove("w-52", "h-40");
//             emojiSelector.classList.add("w-0", "h-0");
//         }
//     } else if (gifSelector.classList.contains("w-60", "h-40")) {
//         gifSelector.classList.remove("w-60", "h-40");
//         gifSelector.classList.add("w-0", "h-0");
//     }
// });

// let searchBtn = document.getElementById("searchBtn");

// function randomGif() {
//     fetch(
//         "https://api.giphy.com/v1/gifs/trending?api_key=Jl6V3BK5DdRXU1kWErXfSGnOYMnudIW2&limit=25&rating=g"
//     )
//         .then((res) => res.json())
//         .then((data) => {
//             gifsRandom = data.data;
//             gifsRandom.forEach((gif) => {
//                 let img = document.createElement("img");
//                 img.setAttribute("src", gif.images.original.url);
//                 img.style.width = "50px";
//                 img.onload = function () {
//                     gifList.style.display = "flex";
//                 };
//                 gifList.append(img);
//                 gifSelector.append(gifList);
//             });
//         });
// }

// function generateGif() {
//     // let apiKey = ''
//     let q = gifSearch.value;
//     let amountOfGifs = 10;
//     // let url = `https://api.giphy.com/v1/search?api_key=${apiKey}&q=${q}&limit=${amountOfGifs}&offset=0&rating=g&lang=en`

//     fetch(
//         `https://api.giphy.com/v1/gifs/search?api_key=Jl6V3BK5DdRXU1kWErXfSGnOYMnudIW2&q=${q}&limit=${amountOfGifs}&offset=0&rating=g&lang=en`
//     )
//         .then((res) => res.json())
//         .then((giphy) => {
//             let gifsData = giphy.data;
//             //   console.log(gifsData);
//             gifsData.forEach((gif) => {
//                 let img = document.createElement("img");
//                 img.setAttribute("src", gif.images.downsized_medium.url);
//                 img.style.width = "50px";
//                 img.onload = function () {
//                     amountOfGifs--;
//                     if (amountOfGifs === 0) {
//                         gifList.style.display = "flex";
//                     }
//                 };

//                 gifList.append(img);
//                 gifSelector.append(gifList);
//             });
//         });
// }

// // gifSearch.addEventListener('input', generateGif)
// window.onload = randomGif;
// // window.addEventListener('load', generateGif)
// searchBtn.addEventListener("click", function () {
//     if (gifSelector !== null) {
//         window.onload = gifSelector.append('')
//         generateGif()
//     }
// });

//emojis
const emojiSelectorIcon = document.getElementById("emojiSelectorIcon");
const emojiSelector = document.getElementById("emojiSelector");
const emojiList = document.getElementById("emojiList");
const emojiSearch = document.getElementById("emojiSearch");
const mainContent = document.querySelector("main");
const extraOptions = document.getElementById("extraOptions");
const emojis = document.querySelectorAll("#emojiList li");
const tweetBtn = document.querySelector(".tweet-btn");

emojiSelectorIcon.addEventListener("click", function () {
    if (emojiSelector.classList.contains("w-0", "h-0")) {
        emojiSelector.classList.remove("w-0", "h-0");
        emojiSelector.classList.add("w-52", "h-40");
        gifSelector.classList.remove("w-60", "h-40");
        gifSelector.classList.add("w-0", "h-0");
    } else if (emojiSelector.classList.contains("w-52", "h-40")) {
        emojiSelector.classList.remove("w-52", "h-40");
        emojiSelector.classList.add("w-0", "h-0");
    }
});

fetch(
    "https://emoji-api.com/emojis?access_key=1ff9bd7b00699ee7cc3e764fb074b42efb580156"
)
    .then((res) => res.json())
    .then((data) => loadEmoji(data));

function loadEmoji(data) {
    data.forEach((emoji) => {
        //setUp emojis to emojisContainer/emojiList
        let li = document.createElement("li");
        li.setAttribute("emoji-name", emoji.slug);
        li.textContent = emoji.character;
        li.classList.add("cursor-pointer");
        emojiList.appendChild(li);

        //add emoji to textarea/input
        li.addEventListener("click", function () {
            tweetBox.value += li.textContent;
            //stay focus on textarea after choosing emoji
            tweetBox.focus();

            // log Tweetbox
            tweetBtn.addEventListener("click", function () {
                // console.log(tweetBox.value);
            });
        });
    });
}

//search emojis by name
emojiSearch.addEventListener("keyup", function (e) {
    let value = e.target.value;
    let emojis = document.querySelectorAll("#emojiList li");
    emojis.forEach((emoji) => {
        if (emoji.getAttribute("emoji-name").toLowerCase().includes(value)) {
            emoji.style.display = "flex";
        } else {
            emoji.style.display = "none";
        }
    });
});

//close emojiList by clicking outside emojiList element
document.addEventListener("click", function (e) {
    if (!extraOptions.contains(e.target) && !emojiSearch.contains(e.target)) {
        emojiSelector.classList.remove("w-52", "h-40");
        emojiSelector.classList.add("w-0", "h-0");
    } else if (!extraOptions.contains(e.target) && !gifSearch.contains(e.target)) {
        gifSelector.classList.remove("w-60", "h-40");
        gifSelector.classList.add("w-0", "h-0");
    }
});


//still fail to close gifs by clicking outside the area
document.onclick = function () {
     if (gifSelector.classList.contains('w-60', 'h-40')) {
         gifSelector.classList.add("w-0", "h-0");
         gifSelector.classList.remove("w-60", "h-40");
        } 
}


//comment section
const commentBtn = document.querySelector('.comment-container img')
const commentField = document.querySelector('.comment-section')
const commentSendBtn = document.querySelector('.comment-section span')

commentBtn.addEventListener('click', function () {
    if (commentField.classList.contains('hidden')) {
        commentField.classList.remove('hidden')
        commentField.classList.add('flex')
    } else {
        commentField.classList.remove('flex')
        commentField.classList.add('hidden')
    }
})

commentSendBtn.addEventListener('click', function () {
    commentField.classList.remove('flex')
    commentField.classList.add('hidden')
})

// share button 
const shareBtn = document.querySelector('.upload-container img')
const bodyOverlay = document.querySelector('.overlay')
const socmedOverlay = document.querySelector('.socmed-overlay')
const closeSocmedOverlayBtn = document.querySelector('.close-socmed-overlay')

bodyOverlay.addEventListener('click', function () {
    bodyOverlay.classList.remove('show')
    socmedOverlay.classList.remove('show')
})

// shareBtn.addEventListener('click', function () {
//     bodyOverlay.classList.toggle('show')
//     socmedOverlay.classList.toggle('show')
// })

closeSocmedOverlayBtn.addEventListener('click', function () {
    bodyOverlay.classList.remove('show')
    socmedOverlay.classList.remove('show')
})

// Share API still error
// share API & Logic
const facebookBtn = document.querySelector(".facebook-btn");
const twitterBtn = document.querySelector(".twitter-btn");
const linkedinBtn = document.querySelector(".linkedin-btn");
const whatsappBtn = document.querySelector(".whatsapp-btn");

function init() {

  let postUrl = 'https://unsplash.com/photos/S2jw81lfrG0';
  let postTitle = encodeURI("Hi everyone, please check this out: ");

    facebookBtn.href = `https://www.facebook.com/sharer.php?u=${postUrl}`

  twitterBtn.href = `https://twitter.com/share?url=${postUrl}&text=${postTitle}`


  linkedinBtn.href =`https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`


  whatsappBtn.href = `https://wa.me/?text=${postTitle} ${postUrl}`
}

init();

//aside content

//search
// const globalSearch = document.getElementById("globalSearch");
// const searchIcon = document.getElementById("searchIcon");
// const closeIcon = document.getElementById("closeIcon");
// const sideContent = document.getElementById("sideContent");
// const searchContainer = document.getElementById("searchContainer");

// globalSearch.addEventListener("click", function () {
//     if (
//         !searchIcon.classList.contains("hidden") &&
//         closeIcon.classList.contains("hidden")
//     ) {
//         searchIcon.classList.add("hidden");
//         closeIcon.classList.remove("hidden");
//     }
// });

// searchIcon.addEventListener("click", function () {
//     searchIcon.classList.add("hidden");
//     closeIcon.classList.remove("hidden");
//     globalSearch.classList.remove("scale-x-0");
//     globalSearch.classList.add("scale-x-100");
//     globalSearch.focus();
// });

// closeIcon.addEventListener("click", function () {
//     searchIcon.classList.remove("hidden");
//     closeIcon.classList.add("hidden");
//     globalSearch.classList.remove("scale-x-100");
//     globalSearch.classList.add("scale-x-0");
//     globalSearch.value = "";
// });

// document.addEventListener("click", function (e) {
//     if (!searchContainer.contains(e.target)) {
//         searchIcon.classList.remove("hidden");
//         closeIcon.classList.add("hidden");
//         globalSearch.classList.remove("scale-x-100");
//         globalSearch.classList.add("scale-x-0");
//         globalSearch.value = "";
//     }
// });



