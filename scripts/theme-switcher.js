(function () {
    function applyTheme(theme) {
        const $html = document.documentElement;
        // Remove any previously set theme classes and add the new one
        $html.classList.remove('light', 'dark');
        $html.classList.add(theme);
        $html.style.colorScheme = theme;
    }

    function toggleTheme() {
        const $html = document.documentElement;
        // Toggle theme based on current state
        if ($html.classList.contains('light')) {
            applyTheme('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            applyTheme('light');
            localStorage.setItem('theme', 'light');
        }
    }

    function documentReady(callback){
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', callback);
        } else {
            callback();
        }
    }

    documentReady(() => {
        // On page load, check localStorage for a saved theme preference.
        const storedTheme = localStorage.getItem('theme') || 'light';
        applyTheme(storedTheme);

        const $themeSwitcher = document.querySelector('#themeSwitcher');
        if ($themeSwitcher) {
            $themeSwitcher.addEventListener('click', toggleTheme);
        }
    });
})();
