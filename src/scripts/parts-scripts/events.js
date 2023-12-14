// console.log("parts-script/events.js");
const ajaxUrl = vars.ajaxUrl;

const sortBtnRef = document.querySelector("#sort-btn");
const paginationMoreRef = document.querySelector(".paginate-more");
const loadMoreBtnRef = document.querySelector("#load-more");
const listElemHtmlRef = document.querySelector("#events-list");

const postsPerPage = Number(listElemHtmlRef.getAttribute("posts-per-page"));

const eventsQueryParams = {
  posts_per_page: postsPerPage,
  offset: 0,
  action: "events_more",
  sort: sortBtnRef.getAttribute("data-sort"),
};

const controlBtnLoadMore = (getPosts) => {
  if (getPosts < postsPerPage) {
    paginationMoreRef.classList.add("hidden");
  } else {
    paginationMoreRef.classList.remove("hidden");
  }
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
  eventsQueryParams.offset = 0;
  listElemHtmlRef.setAttribute("page", 1);

  let ajaxObj = eventsQueryParams;

  ajaxObj["sort"] = sortBtnRef.getAttribute("data-sort");

  sendAjax(ajaxObj, ajaxUrl).then((response) => {
    console.log(response);
    listElemHtmlRef.innerHTML = response.html;
    controlBtnLoadMore(response.posts_count);
  });
});

loadMoreBtnRef.addEventListener("click", (e) => {
  let ajaxObj = eventsQueryParams;
  let currentPage = Number(listElemHtmlRef.getAttribute("page"));

  ajaxObj["offset"] = currentPage * postsPerPage;

  sendAjax(ajaxObj, ajaxUrl).then((response) => {
    console.log(response);
    controlBtnLoadMore(response.posts_count);

    currentPage += 1;
    listElemHtmlRef.insertAdjacentHTML("beforeend", response.html);
    listElemHtmlRef.setAttribute("page", currentPage);
  });
});
