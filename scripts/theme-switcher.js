(function () {
    function toggleTheme() {
        const lightClass = 'light';
        const darkClass = 'dark';
        const $html = document.querySelector('html');
        const isLight = $html.className.includes(lightClass);

        if (isLight) {
            $html.className = $html.className.replace(lightClass, darkClass);
            $html.style.colorScheme = darkClass;
        } else {
            $html.className = $html.className.replace(darkClass, lightClass);
            $html.style.colorScheme = lightClass;
        }
    }

    function documentReady(callback){
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', callback);
        } else {
            callback();
        }
    }

    documentReady(()=>{
        const $themeSwitcher = document.querySelector('#themeSwitcher');
        $themeSwitcher.addEventListener('click', ()=>{
            toggleTheme();
        });
    });
})();