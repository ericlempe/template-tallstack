document.addEventListener("alpine:init", () => {
    Alpine.data('template', () => ({
        breakpoint: 1280,
        showSidebar: true,
        showSidebarMobile: this.init,
        showProfileMenu: false,
        darkMode: false,
        init() {
            if (window.innerWidth < this.breakpoint) {
                this.showSidebarMobile = false;
            } else {
                this.showSidebarMobile = true;
            }
        },
        handleDarkMode() {
            this.darkMode = !this.darkMode;
        },
        handleResize() {
            if (window.innerWidth < this.breakpoint) {
                this.showSidebar = true;
                this.showSidebarMobile = false;
            } else {
                this.showSidebar = true;
                this.showSidebarMobile = true;
            }
        },
        handleSidebar() {
            this.showSidebar = !this.showSidebar;
        },
        handleSidebarMobile() {
            this.showSidebarMobile = !this.showSidebarMobile;
        },
        closeSidebarMobile() {
            this.showSidebarMobile = false;
        },
        handleProfileMenu() {
            this.showProfileMenu = !this.showProfileMenu;
        },
        closeProfileMenu() {
            this.showProfileMenu = false;
        },
        setCurrentRoute(element) {
            let currentUrl = window.location.href;
            let url = element.getAttribute('href');
            if (currentUrl === url) {
                return true;
            } else {
              return false;
            }
        },
        logout() {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        },
    }))
});
