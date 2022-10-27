// navbar start here
const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = () => {
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
}
cancelBtn.onclick = () => {
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
window.onscroll = () => {
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}
// navbar end here

// Post start here
var commentsInner = document.getElementById('comments-inner-one');
var post = document.getElementById('post');
var userPostMainOne = document.getElementById('user-post-main-one');
var userPostMainTwo = document.getElementById('user-post-main-two');
var topNavbar = document.getElementById('navbar');
var normalPost = document.getElementById('normal-post-input');
var MainPostPage = document.getElementById('main-post-sec');
MainPostPage.style.display = 'none';
normalPost.addEventListener('click', function () {
  post.classList.add('post-add');
  MainPostPage.style.display = 'block';
  post.style.background = 'black';
  normalPost.style.display = 'none';
  topNavbar.style.display = 'none';
  userPostMainOne.style.display = 'none';
  userPostMainTwo.style.display = 'none';
  commentsInner.style.display = 'none';

})

// Close Button
var postMainPage = document.getElementById('post');
var closeBtn = document.getElementById('close-btn');
closeBtn.addEventListener('click', function () {
  normalPost.style.display = 'block';
  MainPostPage.style.display = 'none';
  normalPost.classList.add('normal-input-auto');
  userPostMainOne.style.display = 'block';
  userPostMainTwo.style.display = 'block';
  post.style.background = '#0080FF';
  post.classList.add('post-main-page')
  topNavbar.style.display = 'block';
  commentsInner.style.display = 'block';
  commentsInnerOne.style.display = 'none';
});
// post end here

// Comments start here
var commentsInnerOne = document.getElementById('comments-inner-one');
commentsInnerOne.style.display = 'none';
var navbarComment = document.getElementById('navbar');
var postInputCom = document.getElementById('normal-post-input');
var userPostComOne = document.getElementById('user-post-main-one');
var userPostTwo = document.getElementById('user-post-main-two');
var commentsBoxTwo = document.getElementById('comment-box-two');
commentsBoxTwo.addEventListener('click', function () {
  commentsInnerOne.style.display = 'block';
  navbarComment.style.display = 'none';
  postInputCom.style.display = 'none';
  userPostComOne.style.display = 'none';
  userPostTwo.style.display = 'none';
});
var commentsBoxOne = document.getElementById('user-post-main-one');
commentsBoxOne.addEventListener('click', function () {
  commentsInnerOne.style.display = 'block';
  navbarComment.style.display = 'none';
  postInputCom.style.display = 'none';
  userPostComOne.style.display = 'none';
  userPostTwo.style.display = 'none';
});

var commentBackBtn = document.getElementById('comment-back-btn');
commentBackBtn.addEventListener('click', function () {
  postInputCom.style.display = 'block';
  navbarComment.style.display = 'block';
  userPostComOne.style.display = 'block';
  commentsInnerOne.style.display = 'none';
  userPostTwo.style.display = 'block';
});



// post show UI
function commentSend() {
  var commentInput = document.getElementById('comment-input').value;
  console.log(commentInput);
  var commentShowPage = document.getElementById('comment-show-page');

  if (commentInput == '') {
    alert('Write Something');
  } else {
    var newRow = document.createElement('div');
    newRow.className = 'comment-inner-user';

    var newTitle = document.createElement('p');
    newTitle.innerHTML = commentInput;
    newRow.appendChild(newTitle);
    commentShowPage.appendChild(newRow);
  }

}
// Comments end here