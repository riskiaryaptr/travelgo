const TopbarModule = (() => {
    'use strict';

    const $ = id => document.getElementById(id);
    const $one = sel => document.querySelector(sel);
    const $$ = sel => document.querySelectorAll(sel);
    const setHidden = (el, hidden) => el && el.classList[hidden ? 'add' : 'remove']('hidden');
    const swap = (hideEl, showEl) => { setHidden(hideEl, true); setHidden(showEl, false); };
    const toggleClass = (el, className) => el && el.classList.toggle(className);
    const addEvents = (el, events) => Object.entries(events).forEach(([event, handler]) => el?.addEventListener(event, handler));

    return {
        
        // Mobile Menu
        initMobileMenu: () => {
            const menu = $('mobile-menu');
            const [openBtn, closeBtn, overlay, chatToggle] = [
                $one('[data-menu-open]'), $one('[data-menu-close]'), $('mobile-menu-overlay'), $('chat-toggle')
            ];
            if (!menu || !openBtn || !closeBtn || !overlay) return;

            const toggle = open => {
                menu.classList.toggle('translate-x-full', !open);
                menu.classList.toggle('translate-x-0', open);
                overlay.classList.toggle('hidden', !open);
                chatToggle && setHidden(chatToggle, !open);
            };

            openBtn.onclick = () => toggle(true);
            closeBtn.onclick = overlay.onclick = () => toggle(false);
        },

        // Inbox
        initInbox: () => {
            const elements = { 
                getStarted: $('getStartedBtn'), mobileLogin: $('mobileLoginArea'), closeMobile: $('closeMobileLogin'), 
                welcome: $('welcomeArea'), otherDesktop: $('otherOptionsDesktop'), backDesktop: $('backDesktop'), 
                socialDesktop: $('socialOptionsDesktop'), emailDesktop: $('emailOptionsDesktop'), 
                otherMobile: $('otherOptionsMobile'), backMobile: $('backMobile'), 
                socialMobile: $('socialOptionsMobile'), emailMobile: $('emailOptionsMobile') 
            };

            addEvents(elements.getStarted, { click: () => window.innerWidth < 768 && swap(elements.welcome, elements.mobileLogin) });
            addEvents(elements.closeMobile, { click: () => swap(elements.mobileLogin, elements.welcome) });
            addEvents(elements.mobileLogin, { click: e => e.target === elements.mobileLogin && swap(elements.mobileLogin, elements.welcome) });
            
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 768) {
                    setHidden(elements.mobileLogin, true);
                    setHidden(elements.welcome, false);
                }
            });

            const setupOptionToggle = (other, back, social, email) => {
                addEvents(other, { click: () => swap(social, email) });
                addEvents(back, { click: () => swap(email, social) });
            };

            setupOptionToggle(elements.otherDesktop, elements.backDesktop, elements.socialDesktop, elements.emailDesktop);
            setupOptionToggle(elements.otherMobile, elements.backMobile, elements.socialMobile, elements.emailMobile);
        },

        // Enhanced Dropdown 
        initDropdownToggle: () => {
            $$('[data-dropdown-toggle]').forEach(btn => {
                const menu = btn.parentElement.querySelector('[data-dropdown-menu]');
                const icon = btn.querySelector('svg');
                const targetInput = btn.getAttribute('data-target-input');
                const targetDisplay = btn.getAttribute('data-target-display');
                const closeOnOutside = btn.getAttribute('data-close-outside') !== 'false';
                
                btn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    
                    if (closeOnOutside) {
                        $$('[data-dropdown-menu]').forEach(otherMenu => {
                            if (otherMenu !== menu) {
                                otherMenu.classList.add('hidden');
                                const otherIcon = otherMenu.parentElement.querySelector('svg');
                                if (otherIcon) otherIcon.classList.remove('rotate-180');
                            }
                        });
                    }
                    
                    toggleClass(menu, 'hidden');
                    if (icon) toggleClass(icon, 'rotate-180');
                });
                
                menu?.querySelectorAll('[data-dropdown-option]').forEach(option => {
                    option.addEventListener('click', (e) => {
                        e.stopPropagation();
                        
                        if (targetDisplay) {
                            const displayEl = document.getElementById(targetDisplay);
                            if (displayEl) {
                                displayEl.textContent = option.textContent;
                            }
                        }
                        
                        if (targetInput) {
                            const inputEl = document.getElementById(targetInput);
                            if (inputEl) {
                                const value = option.getAttribute('data-value') || option.textContent;
                                inputEl.value = value;
                            }
                        }
                        
                        menu.classList.add('hidden');
                        if (icon) icon.classList.remove('rotate-180');
                    });
                });

                if (closeOnOutside) {
                    document.addEventListener('click', () => {
                        if (!menu.classList.contains('hidden')) {
                            menu.classList.add('hidden');
                            if (icon) icon.classList.remove('rotate-180');
                        }
                    });
                }
            });
        },

        // Booking
        initBooking: () => {
            const elements = {
                access: $('access-booking-card'), close: $('close-access-booking'),
                flightsBtn: $('toggle-flights'), flights: $('flights-detail'),
                hotelsBtn: $('toggle-hotels'), hotels: $('hotels-detail'),
                trainsBtn: $('toggle-trains'), trains: $('trains-detail'),
                forgotBtn: $('toggle-forgot-booking-id'), forgotDetail: $('forgot-booking-id-detail'),
                backBtn: $('back-to-flights'), unfinished: $('unfinished-booking'),
                allBtn: $('toggle-all-products')
            };

            const details = [elements.flights, elements.hotels, elements.trains, elements.forgotDetail, elements.unfinished];
            const buttons = [elements.flightsBtn, elements.hotelsBtn, elements.trainsBtn, elements.allBtn];

            const hideAll = () => details.forEach(el => el && setHidden(el, true));
            const clearActive = () => buttons.forEach(btn => btn && btn.classList.remove('bg-blue-50', 'text-blue-500'));
            const setActive = btn => { clearActive(); btn && btn.classList.add('bg-blue-50', 'text-blue-500'); };
            const showCard = () => elements.access && elements.access.style.display === 'none' && (elements.access.style.display = 'flex');
            
            const showDetail = (btn, detail) => e => {
                e.preventDefault();
                showCard(); hideAll();
                toggleClass(detail, 'hidden');
                detail.classList.contains('hidden') ? clearActive() : (setActive(btn), detail.scrollIntoView({behavior:'smooth', block:'start'}));
            };

            const showSection = (detail, btn) => e => {
                e.preventDefault();
                showCard(); hideAll();
                setHidden(detail, false);
                btn && setActive(btn);
                detail?.scrollIntoView({behavior:'smooth', block:'start'});
            };

            addEvents(elements.close, { click: e => (e.preventDefault(), elements.access.style.display = 'none', clearActive()) });
            addEvents(elements.flightsBtn, { click: showDetail(elements.flightsBtn, elements.flights) });
            addEvents(elements.hotelsBtn, { click: showDetail(elements.hotelsBtn, elements.hotels) });
            addEvents(elements.trainsBtn, { click: showDetail(elements.trainsBtn, elements.trains) });
            addEvents(elements.forgotBtn, { click: showSection(elements.forgotDetail) });
            addEvents(elements.backBtn, { click: showSection(elements.flights, elements.flightsBtn) });
            addEvents(elements.allBtn, { click: showSection(elements.unfinished, elements.allBtn) });
        },

        // Contact Us
        initContactUs: () => {
            const [tabs, viewport, btnPrev, btnNext] = [
                $('popularTabs'), $('popularViewport'), $('popularPrev'), $('popularNext')
            ];
            if (!tabs || !viewport || !btnPrev || !btnNext) return;

            const isLarge = () => window.innerWidth >= 1078;
            const isMid = () => window.innerWidth >= 1078 && window.innerWidth <= 1200;
            const isDesk = () => window.innerWidth > 1200;
            const items = () => Array.from(tabs.querySelectorAll('li'));

            const setViewport = () => {
                const its = items();
                const n = isMid() ? Math.min(8, its.length) : isDesk() ? Math.min(9, its.length) : its.length;
                let w = 0;
                for (let i = 0; i < n; i++) w += its[i].getBoundingClientRect().width;
                const gap = parseFloat(getComputedStyle(tabs).columnGap || getComputedStyle(tabs).gap || '8');
                viewport.style.maxWidth = Math.ceil(w + gap * Math.max(0, n - 1)) + 'px';
            };

            const showBtns = () => {
                if (!isLarge()) { setHidden(btnPrev, true); setHidden(btnNext, true); return; }
                const canL = tabs.scrollLeft > 0;
                const canR = tabs.scrollLeft < tabs.scrollWidth - tabs.clientWidth - 1;
                setHidden(btnPrev, !canL);
                setHidden(btnNext, !canR);
            };

            const toggleBtns = () => {
                const its = items();
                const need = (isMid() && its.length > 8) || (isDesk() && its.length > 9) || (tabs.scrollWidth > tabs.clientWidth + 1);
                const show = need && isLarge();
                setHidden(btnPrev, !show);
                setHidden(btnNext, !show);
                if (show) showBtns();
            };

            const scrollAmt = () => Math.max(160, Math.floor(viewport.clientWidth * 0.6));

            btnPrev.onclick = () => tabs.scrollBy({ left: -scrollAmt(), behavior: 'smooth' });
            btnNext.onclick = () => tabs.scrollBy({ left: scrollAmt(), behavior: 'smooth' });
            tabs.addEventListener('scroll', showBtns, { passive: true });
            window.addEventListener('resize', () => setTimeout(() => { setViewport(); toggleBtns(); showBtns(); }, 100));
            
            tabs.addEventListener('wheel', e => {
                if (Math.abs(e.deltaX) < Math.abs(e.deltaY) && !e.shiftKey) return;
                e.preventDefault();
                tabs.scrollBy({ left: e.deltaX !== 0 ? e.deltaX : e.deltaY, behavior: 'auto' });
            }, { passive: false });

            setViewport();
            toggleBtns();
        },

        // Help Center
        initHelpCenter: () => {
            const [openBtn, modal, closeBtn, overlay] = [
                $('openAllProducts'), $('allProductsModal'), $('closeAllProducts'),
                $('allProductsModal')?.querySelector('[data-overlay]')
            ];

            const openModal = e => { e?.preventDefault(); setHidden(modal, false); };
            const closeModal = () => setHidden(modal, true);

            addEvents(openBtn, { click: openModal });
            addEvents(closeBtn, { click: closeModal });
            addEvents(overlay, { click: closeModal });
            
            document.addEventListener('keydown', e => {
                if (e.key === 'Escape' && !modal?.classList.contains('hidden')) closeModal();
            });
        },

        // Country Phone Selector
        initCountrySelector: () => {
            document.querySelectorAll('.country-selector').forEach(selector => {
                const dropdownBtn = selector.querySelector('.countryDropdownBtn');
                const dropdownMenu = selector.querySelector('.countryDropdown');
                const selected = selector.querySelector('.selectedCountry');
                const input = selector.querySelector('input[type="hidden"]');
                
                if (!dropdownBtn || !dropdownMenu || !selected) return;

                dropdownBtn.addEventListener('click', e => {
                    e.preventDefault();
                    e.stopPropagation();

                    document.querySelectorAll('.countryDropdown').forEach(m => {
                        if (m !== dropdownMenu) m.classList.add('hidden');
                    });

                    dropdownMenu.classList.toggle('hidden');

                    if ('scrollBehavior' in document.documentElement.style) {
                        window.scrollTo({ top: window.scrollY, behavior: 'auto' });
                    }
                });

                dropdownMenu.querySelectorAll('div[data-country]').forEach(item => {
                    item.addEventListener('click', e => {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        const countryCode = item.dataset.country;
                        selected.textContent = countryCode;
                        
                        if (input) {
                            input.value = countryCode;
                        }
                        
                        dropdownMenu.classList.add('hidden');
                    });
                });

                document.addEventListener('click', (e) => {
                    if (!selector.contains(e.target)) {
                        dropdownMenu.classList.add('hidden');
                    }
                });
            });
        },

        init: () => {
            document.addEventListener('DOMContentLoaded', () => {
                TopbarModule.initMobileMenu();
                TopbarModule.initInbox();
                TopbarModule.initDropdownToggle();
                TopbarModule.initBooking();
                TopbarModule.initContactUs();
                TopbarModule.initHelpCenter();
                TopbarModule.initCountrySelector();
            });
        }
    };
})();

TopbarModule.init();