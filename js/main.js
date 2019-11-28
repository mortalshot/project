(function () {
    let tabTitles = document.querySelectorAll('.account-tab-title');
    tabTitles.forEach(function (el, index) {
        el.addEventListener('click', function () {
            let currentTabData = document.querySelector('.account-tab-content[data-content="' + this.dataset.title + '"]');
            document.querySelector('.account-tab-title.active').classList.remove('active');
            document.querySelector('.account-tab-content.active').classList.remove('active');
            currentTabData.classList.add('active');
            this.classList.add('active');
        })
    });
})();
(function () {
    let tabTitles = document.querySelectorAll('.tab-title');
    tabTitles.forEach(function (el, index) {
        el.addEventListener('click', function () {
            let currentTabData = document.querySelector('.tab-content[data-content="' + this.dataset.title + '"]');
            document.querySelector('.tab-title.active').classList.remove('active');
            document.querySelector('.tab-content.active').classList.remove('active');
            currentTabData.classList.add('active');
            this.classList.add('active');
        })
    });
})();