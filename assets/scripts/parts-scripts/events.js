const ajaxUrl=vars.ajaxUrl,sortBtnRef=document.querySelector("#sort-btn"),paginationMoreRef=document.querySelector(".paginate-more"),loadMoreBtnRef=document.querySelector("#load-more"),listElemHtmlRef=document.querySelector("#events-list"),postsPerPage=Number(listElemHtmlRef.getAttribute("posts-per-page")),eventsQueryParams={posts_per_page:postsPerPage,offset:0,action:"events_more",sort:sortBtnRef.getAttribute("data-sort")},controlBtnLoadMore=t=>{t<postsPerPage?paginationMoreRef.classList.add("hidden"):paginationMoreRef.classList.remove("hidden")};async function sendAjax(t,e){let r=new FormData;if(null!=t)for(const[e,o]of Object.entries(t))r.append(e,o);let o={method:"POST",body:r,redirect:"follow"};const s=await fetch(e,o);return(await s).json()}sortBtnRef.addEventListener("click",(()=>{sortBtnRef.setAttribute("disabled","true"),"desc"===sortBtnRef.getAttribute("data-sort")?sortBtnRef.setAttribute("data-sort","asc"):sortBtnRef.setAttribute("data-sort","desc"),eventsQueryParams.offset=0,listElemHtmlRef.setAttribute("page",1);let t=eventsQueryParams;t.sort=sortBtnRef.getAttribute("data-sort"),sendAjax(t,ajaxUrl).then((t=>{console.log(t),listElemHtmlRef.innerHTML=t.html,controlBtnLoadMore(t.posts_count)})).finally((t=>{sortBtnRef.removeAttribute("disabled")}))})),loadMoreBtnRef.addEventListener("click",(t=>{let e=eventsQueryParams,r=Number(listElemHtmlRef.getAttribute("page"));loadMoreBtnRef.setAttribute("disabled","true"),e.offset=r*postsPerPage,sendAjax(e,ajaxUrl).then((t=>{console.log(t),controlBtnLoadMore(t.posts_count),r+=1,listElemHtmlRef.insertAdjacentHTML("beforeend",t.html),listElemHtmlRef.setAttribute("page",r)})).finally((t=>{loadMoreBtnRef.removeAttribute("disabled")}))}));