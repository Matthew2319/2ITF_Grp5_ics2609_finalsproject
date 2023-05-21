const tabs = document.querySelectorAll("[data-tab-target]");
const tabContents = document.querySelectorAll("[data-tab-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.tabTarget);
    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");
    target.classList.add("active");
  });
});

let noOfCharac = 250;
let contents = document.querySelectorAll(".content");
contents.forEach((content) => {
  if (content.textContent.length < noOfCharac) {
    content.nextElementSibling.style.display = "none";
  } else {
    let displayText = content.textContent.slice(0, noOfCharac);
    let moreText = content.textContent.slice(noOfCharac);
    content.innerHTML = `${displayText}<span class="dots">...</span><span class="hide more">${moreText}</span>`;
  }
});

function readMore(btn) {
  let post = btn.parentElement;
  post.querySelector(".dots").classList.toggle("hide");
  post.querySelector(".more").classList.toggle("hide");
  btn.textContent == "Read More"
    ? (btn.textContent = "Read Less")
    : (btn.textContent = "Read More");
}
