//Default Apps Filter
function mo_oauth_client_default_apps_input_filter() {
    var input, filter, ul, li, a, i;
    var counter = 0;
    input = document.getElementById("mo_oauth_client_default_apps_input");
    filter = input.value.toUpperCase();
    ul = document.getElementById("mo_oauth_client_searchable_apps");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.split('<br>')[1].toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
            counter++;
        }
        if(counter>=li.length) {
            document.getElementById("mo_oauth_client_search_res").innerHTML = "<p class='lead muted mo_premium_features_notice'>No applications found in this category, matching your search query. Please select a custom application from below.</p>";
        } else {
            document.getElementById("mo_oauth_client_search_res").innerHTML = "";
        }
    }
}

function outFunc() {
    var tooltip = document.getElementById("moTooltip");
    tooltip.innerHTML = "Copy to clipboard";
}

function copyUrl() {
    var copyText = document.getElementById("callbackurl");
    outFunc();
    copyText.select();
    copyText.setSelectionRange(0, 99999); 
    document.execCommand("copy");
    var tooltip = document.getElementById("moTooltip");
    tooltip.innerHTML = "Copied";
    // document.getElementById("redirect_url_change_warning").style.display = "none";
} 