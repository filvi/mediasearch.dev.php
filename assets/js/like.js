$(window).on('load', function () {
    // getting the saved value
    var obj = JSON.parse(localStorage.getItem('<?php echo $choice; ?>'));

    // foreach apply the liked action
    var lst = []
    if (obj === null) {
        return lst
    }
    obj.forEach(o => {
        var sitename = o.sitename;
        var liked = o.liked;
        var target = document.querySelector(`[data-site="${sitename}"]`);
        target.dataset.liked = liked;

        let L = {};
        L.sitename = sitename;
        L.liked = target.dataset.liked;
        L.section = target.dataset.section;

        start = document.getElementById("sitelist")
        if (L.liked === "true") {
            start.prepend(target)
        }
        if (L.liked === "false") {
            start.append(target)
        }
        lst.push(L)

    });

    return lst
})

function like(el, e, status) {

    e.preventDefault()

    var lst = JSON.parse(localStorage.getItem("<?php echo $choice;?>"));

    if (lst === null) {
        lst = []
    }
    console.table(lst)
    var target = el.parentElement.parentElement;
    var sitename = target.dataset.site;
    var liked = target.dataset.liked;
    console.log(liked)

    var found = false
    lst.forEach((l) => {
        if (l.sitename == sitename) {
            found = true
        }
    })

    if (liked !== status) {
        target.dataset.liked = status;
    }
    if (liked == status) {
        target.dataset.liked = "none";
    }

    if (found !== true) {

        let L = {};
        L.sitename = sitename;
        L.liked = target.dataset.liked;
        L.section = target.dataset.section;

        lst.push(L);
        localStorage.setItem("<?php echo $choice;?>", JSON.stringify(lst));
    }

    start = document.getElementById("sitelist")

    if (status == "true") {
        start.prepend(target);
    }
    if (status == "false") {
        start.append(target);
    }

}