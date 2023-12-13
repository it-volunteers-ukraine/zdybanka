// console.log("parts-script/events.js");
const ajaxUrl = vars.ajaxUrl;




const sortBtnRef = document.querySelector("#sort-btn");
const paginationMoreRef = document.querySelector('.paginate-more');
const loadMoreBtnRef = document.querySelector("#load-more");
const listElemHtmlRef = document.querySelector("#events-list");

let currentPage = Number(listElemHtmlRef.getAttribute("page"));
const postsPerPage = Number(listElemHtmlRef.getAttribute("posts-per-page"));
const postsOffset = postsPerPage * currentPage;

const eventsQueryParams = {
  posts_per_page: postsPerPage,
  offset: 0,
  action: "events_more",
  sort: sortBtnRef.getAttribute("data-sort"),
};

async function sendAjax(data, url) {
  let sendData = new FormData();

  if (data !== null && data !== undefined) {
    for (const [key, value] of Object.entries(data)) {
      sendData.append(key, value);
    }
  }

  let requestOptions = {
    method: "POST",
    body: sendData,
    redirect: "follow",
  };
  const response = await fetch(url, requestOptions);
  const res = await response;
  const responseJson = res.json();
  return responseJson;
}

sortBtnRef.addEventListener("click", () => {
  if (sortBtnRef.getAttribute("data-sort") === "desc") {
    sortBtnRef.setAttribute("data-sort", "asc");
  } else {
    sortBtnRef.setAttribute("data-sort", "desc");
  }

  let ajaxObj = eventsQueryParams;

  ajaxObj["sort"] = sortBtnRef.getAttribute("data-sort");

  sendAjax(ajaxObj, ajaxUrl).then((response) => {
    // console.log(response);
    listElemHtmlRef.innerHTML = response.html;
  });
});

loadMoreBtnRef.addEventListener("click", (e) => {
  let ajaxObj = eventsQueryParams;
  ajaxObj["offset"] = currentPage * postsPerPage;

  sendAjax(ajaxObj, ajaxUrl).then((response) => {
    // console.log(response);
    if (response.posts_count < postsPerPage){
      paginationMoreRef.classList.add('hidden')
    }

    currentPage += 1;
    listElemHtmlRef.insertAdjacentHTML("beforeend", response.html);
    listElemHtmlRef.setAttribute("page", currentPage);
  });
});
