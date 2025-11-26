// calendar
document.addEventListener('DOMContentLoaded', () => {
    const calendarContainer = document.getElementById('checkin-calendar');
    const currentMonthYear = document.getElementById('current-month-year');
    const calendarDays = document.getElementById('calendar-days');

    const bookingCalendarContainer = document.querySelector('.booking-section #checkin-calendar');
    const bookingCurrentMonthYear = document.querySelector('.booking-section #current-month-year');
    const bookingCalendarDays = document.querySelector('.booking-section #calendar-days');

    const hotelCalendarContainer = document.getElementById('hotel-checkin-calendar');
    const hotelCurrentMonthYear = document.querySelector('#hotel-checkin-calendar #current-month-year');
    const hotelCalendarDays = document.querySelector('#hotel-checkin-calendar #calendar-days');

    const trainCalendarContainer = document.getElementById('train-checkin-calendar');
    const trainCurrentMonthYear = document.querySelector('#train-checkin-calendar #current-month-year');
    const trainCalendarDays = document.querySelector('#train-checkin-calendar #calendar-days');

    const forgotidCalendarContainer = document.getElementById('forgotid-checkin-calendar');
    const forgotidCurrentMonthYear = document.getElementById('forgotid-current-month-year');
    const forgotidCalendarDays = document.querySelector('#forgotid-checkin-calendar #calendar-days');

    const doubleCalendarContainer = document.getElementById('double-checkin-calendar');
    const doubleCheckinMonthYear = document.getElementById('current-month-year');
    const doubleCheckinDays = document.getElementById('checkin-days-current-double');
    const doubleCheckoutMonthYear = document.getElementById('checkout-month-year-double');
    const doubleCheckoutDays = document.getElementById('checkout-days-current-double');

    let currentDate = new Date(2025, 9, 15);    
    let selectedDate = new Date(2025, 9, 15);

    let bookingCurrentDate = new Date(2025, 9, 15);
    let bookingSelectedDate = new Date(2025, 9, 15);

    let hotelCurrentDate = new Date(2025, 9, 15);
    let hotelSelectedDate = new Date(2025, 9, 15);

    let trainCurrentDate = new Date(2025, 9, 15);
    let trainSelectedDate = new Date(2025, 9, 15);

    let forgotidCurrentDate = new Date(2025, 9, 15);
    let forgotidSelectedDate = new Date(2025, 9, 15);

    let doubleCheckinCurrentDate = new Date(2025, 9, 15);
    let doubleCheckinSelectedDate = new Date(2025, 9, 15);
    let doubleCheckoutCurrentDate = new Date(2025, 9, 16);
    let doubleCheckoutSelectedDate = null;

    function toggleCheckinCalendar(type = 'flight') {
        const calendarContainer = type === 'hotel' ? hotelCalendarContainer : 
        type === 'train' ? trainCalendarContainer : 
        type === 'forgotid' ? forgotidCalendarContainer : 
        type === 'booking' ? bookingCalendarContainer :
        calendarContainer;
        
        if (!calendarContainer) return;
        
        const isHidden = calendarContainer.classList.contains('hidden');
        
        [calendarContainer, bookingCalendarContainer, hotelCalendarContainer, trainCalendarContainer, forgotidCalendarContainer, doubleCalendarContainer].forEach(cal => {
            if (cal && cal !== calendarContainer) {
                cal.classList.add('hidden');
            }
        });
        
        document.querySelectorAll('.airport-dropdown').forEach(d => d.classList.add('hidden'));        
        const guestsDropdown = document.getElementById('guests-rooms-dropdown');
        
        if (guestsDropdown) {
            guestsDropdown.classList.add('hidden');
        }
        
        if (isHidden) {
            calendarContainer.classList.remove('hidden');
            renderCalendar(type);
        } else {
            calendarContainer.classList.add('hidden');
        }
    }

    function toggledoubleinCalendar() {
        if (!doubleCalendarContainer) return;

        const isHidden = doubleCalendarContainer.classList.contains('hidden');

        if (isHidden) {

            doubleCalendarContainer.classList.remove('show');
            void doubleCalendarContainer.offsetWidth; 

            doubleCalendarContainer.classList.remove('hidden');

            setTimeout(() => {
                doubleCalendarContainer.classList.add('show');
            }, 10);

            renderDoubleCalendar();

        } else {

            doubleCalendarContainer.classList.remove('show');

            setTimeout(() => {
                doubleCalendarContainer.classList.add('hidden');
            }, 300);
        }
    }

    function detectCalendarType(target) {
        if (target.closest('#hotel-checkin-calendar')) return 'hotel';
        if (target.closest('#train-checkin-calendar')) return 'train';
        if (target.closest('#forgotid-checkin-calendar')) return 'forgotid';
        if (target.closest('#double-checkin-calendar')) return 'double';
        if (target.closest('.booking-section #checkin-calendar')) return 'booking';
        return 'flight';
    }

    function previousMonth(type = 'auto') {
        if (type === 'auto') type = detectCalendarType(event.target);

        if (type === 'hotel') {
            hotelCurrentDate.setMonth(hotelCurrentDate.getMonth() - 1);
            renderCalendar('hotel');
        } else if (type === 'train') {
            trainCurrentDate.setMonth(trainCurrentDate.getMonth() - 1);
            renderCalendar('train');
        } else if (type === 'forgotid') {
            forgotidCurrentDate.setMonth(forgotidCurrentDate.getMonth() - 1);
            renderCalendar('forgotid');
        } else if (type === 'booking') {
            bookingCurrentDate.setMonth(bookingCurrentDate.getMonth() - 1);
            renderCalendar('booking');
        } else if (type === 'double') {
            doubleCheckinCurrentDate.setMonth(doubleCheckinCurrentDate.getMonth() - 1);
            doubleCheckoutCurrentDate.setMonth(doubleCheckoutCurrentDate.getMonth() - 1);
            renderDoubleCalendar();
        } else {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar('flight');
        }
    }

    function nextMonth(type = 'auto') {
        if (type === 'auto') type = detectCalendarType(event.target);

        if (type === 'hotel') {
            hotelCurrentDate.setMonth(hotelCurrentDate.getMonth() + 1);
            renderCalendar('hotel');
        } else if (type === 'train') {
            trainCurrentDate.setMonth(trainCurrentDate.getMonth() + 1);
            renderCalendar('train');
        } else if (type === 'forgotid') {
            forgotidCurrentDate.setMonth(forgotidCurrentDate.getMonth() + 1);
            renderCalendar('forgotid');
        } else if (type === 'booking') {
            bookingCurrentDate.setMonth(bookingCurrentDate.getMonth() + 1);
            renderCalendar('booking');
        } else if (type === 'double') {
            doubleCheckinCurrentDate.setMonth(doubleCheckinCurrentDate.getMonth() + 1);
            doubleCheckoutCurrentDate.setMonth(doubleCheckoutCurrentDate.getMonth() + 1);
            renderDoubleCalendar();
        } else {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar('flight');
        }
    }

    function selectDate(day, month, year, type = 'flight') {
        const targetDate = new Date(year, month, day);

        let displayInput, hiddenInput, calendarElement;

        if (type === 'hotel') {
            displayInput = document.getElementById('hotel-checkin-display');
            hiddenInput = document.getElementById('hotel-checkin-date');
            calendarElement = hotelCalendarContainer;
            hotelSelectedDate = targetDate;
        } else if (type === 'train') {
            displayInput = document.getElementById('train-checkin-display');
            hiddenInput = document.getElementById('train-checkin-date');
            calendarElement = trainCalendarContainer;
            trainSelectedDate = targetDate;
        } else if (type === 'forgotid') {
            displayInput = document.getElementById('forgotid-checkin-display');
            hiddenInput = document.getElementById('forgotid-checkin-date');
            calendarElement = forgotidCalendarContainer;
            forgotidSelectedDate = targetDate;
        } else if (type === 'booking') {
            displayInput = document.getElementById('checkin-display');
            hiddenInput = document.getElementById('checkin-date');
            calendarElement = bookingCalendarContainer;
            bookingSelectedDate = targetDate;
        } else {
            displayInput = document.getElementById('checkin-display');
            hiddenInput = document.getElementById('checkin-date');
            calendarElement = calendarContainer;
            selectedDate = targetDate;
        }

        const options = { weekday: 'short', day: 'numeric', month: 'short', year: 'numeric' };
        displayInput.value = targetDate.toLocaleDateString('en-US', options);
        hiddenInput.value = targetDate.toISOString().split('T')[0];

        calendarElement.classList.add('hidden');
    }

    function selectDoubleDate(day, month, year, calendarType) {
        const targetDate = new Date(year, month, day);
        const options = { weekday: 'short', day: 'numeric', month: 'short', year: 'numeric' };
        const formattedDate = targetDate.toLocaleDateString('en-US', options);
        const isoDate = targetDate.toISOString().split('T')[0];

        if (calendarType === 'checkin') {
            doubleCheckinSelectedDate = targetDate;
            document.getElementById('selected-checkin-double').textContent = formattedDate;
            document.getElementById('double-checkin-date').value = isoDate;
            
            if (doubleCheckoutSelectedDate && doubleCheckoutSelectedDate <= targetDate) {
                doubleCheckoutSelectedDate = null;
                document.getElementById('selected-checkout-double').textContent = '-';
                document.getElementById('double-checkout-date').value = '';
            }
        } else if (calendarType === 'checkout') {
            if (doubleCheckinSelectedDate && targetDate > doubleCheckinSelectedDate) {
                doubleCheckoutSelectedDate = targetDate;
                document.getElementById('selected-checkout-double').textContent = formattedDate;
                document.getElementById('double-checkout-date').value = isoDate;
                
                const checkinOptions = { weekday: 'short', day: 'numeric', month: 'short', year: 'numeric' };
                const checkinFormatted = doubleCheckinSelectedDate.toLocaleDateString('en-US', checkinOptions);
                document.getElementById('double-checkin-display').value = `${checkinFormatted} - ${formattedDate}`;
                
                doubleCalendarContainer.classList.add('hidden');
            }
        }
        
        renderDoubleCalendar();
    }

    function renderCalendar(type = 'flight') {
        const monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        let thisMonthYear, thisCalendarDays, thisDate, thisSelected;

        if (type === 'hotel') {
            thisMonthYear = hotelCurrentMonthYear;
            thisCalendarDays = hotelCalendarDays;
            thisDate = hotelCurrentDate;
            thisSelected = hotelSelectedDate;
        } else if (type === 'train') {
            thisMonthYear = trainCurrentMonthYear;
            thisCalendarDays = trainCalendarDays;
            thisDate = trainCurrentDate;
            thisSelected = trainSelectedDate;
        } else if (type === 'forgotid') {
            thisMonthYear = forgotidCurrentMonthYear;
            thisCalendarDays = forgotidCalendarDays;
            thisDate = forgotidCurrentDate;
            thisSelected = forgotidSelectedDate;
        } else if (type === 'booking') {
            thisMonthYear = bookingCurrentMonthYear;
            thisCalendarDays = bookingCalendarDays;
            thisDate = bookingCurrentDate;
            thisSelected = bookingSelectedDate;
        } else {
            thisMonthYear = currentMonthYear;
            thisCalendarDays = calendarDays;
            thisDate = currentDate;
            thisSelected = selectedDate;
        }

        if (!thisMonthYear || !thisCalendarDays) return;

        thisMonthYear.textContent = `${monthNames[thisDate.getMonth()]} ${thisDate.getFullYear()}`;
        thisCalendarDays.innerHTML = '';

        const firstDay = new Date(thisDate.getFullYear(), thisDate.getMonth(), 1);
        const lastDay = new Date(thisDate.getFullYear(), thisDate.getMonth() + 1, 0);
        const daysInMonth = lastDay.getDate();

        let startingDay = firstDay.getDay();
        startingDay = startingDay === 0 ? 6 : startingDay - 1;

        for (let i = 0; i < startingDay; i++) {
            const emptyDay = document.createElement('div');
            emptyDay.className = 'text-center py-1 text-gray-300 text-xs sm:text-sm flex items-center justify-center min-h-[28px]';
            thisCalendarDays.appendChild(emptyDay);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dateNow = new Date(thisDate.getFullYear(), thisDate.getMonth(), day);
            const isSelected =
                dateNow.getFullYear() === thisSelected.getFullYear() &&
                dateNow.getMonth() === thisSelected.getMonth() &&
                dateNow.getDate() === thisSelected.getDate();
            const today = new Date();
            const isToday = dateNow.toDateString() === today.toDateString();

            const dayElement = document.createElement('div');
            let baseClasses =
                'text-center cursor-pointer rounded-full transition-colors text-xs sm:text-sm flex items-center justify-center w-7 h-7 sm:w-8 sm:h-8';

            if (isSelected) baseClasses += ' bg-blue-500 text-white font-semibold';
            else if (isToday) baseClasses += ' bg-blue-100 text-blue-600 font-semibold';
            else baseClasses += ' hover:bg-blue-50 text-gray-700';

            dayElement.className = baseClasses;
            dayElement.textContent = day;
            dayElement.onclick = () => selectDate(day, thisDate.getMonth(), thisDate.getFullYear(), type);
            thisCalendarDays.appendChild(dayElement);
        }
    }

    function renderDoubleCalendar() {
        const monthNames = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        if (doubleCheckinMonthYear && doubleCheckinDays) {
            doubleCheckinMonthYear.textContent = `${monthNames[doubleCheckinCurrentDate.getMonth()]} ${doubleCheckinCurrentDate.getFullYear()}`;
            renderMonthDays(doubleCheckinDays, doubleCheckinCurrentDate, doubleCheckinSelectedDate, 'checkin');
        }

        if (doubleCheckoutMonthYear && doubleCheckoutDays) {
            doubleCheckoutMonthYear.textContent = `${monthNames[doubleCheckoutCurrentDate.getMonth()]} ${doubleCheckoutCurrentDate.getFullYear()}`;
            renderMonthDays(doubleCheckoutDays, doubleCheckoutCurrentDate, doubleCheckoutSelectedDate, 'checkout');
        }
    }

    function renderMonthDays(container, currentDate, selectedDate, calendarType) {
        container.innerHTML = '';

        const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
        const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
        const daysInMonth = lastDay.getDate();

        let startingDay = firstDay.getDay();
        startingDay = startingDay === 0 ? 6 : startingDay - 1;

        for (let i = 0; i < startingDay; i++) {
            const emptyDay = document.createElement('div');
            emptyDay.className = 'text-center py-1 text-gray-300 text-xs sm:text-sm flex items-center justify-center min-h-[28px]';
            container.appendChild(emptyDay);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dateNow = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
            const isSelected = selectedDate &&
                dateNow.getFullYear() === selectedDate.getFullYear() &&
                dateNow.getMonth() === selectedDate.getMonth() &&
                dateNow.getDate() === selectedDate.getDate();
            const today = new Date();
            const isToday = dateNow.toDateString() === today.toDateString();
            
            let isDisabled = false;
            if (calendarType === 'checkout' && doubleCheckinSelectedDate) {
                isDisabled = dateNow <= doubleCheckinSelectedDate;
            }

            const dayElement = document.createElement('div');
            let baseClasses =
                'text-center cursor-pointer rounded-full transition-colors text-xs sm:text-sm flex items-center justify-center w-7 h-7 sm:w-8 sm:h-8';

            if (isDisabled) {
                baseClasses += ' text-gray-300 cursor-not-allowed';
            } else if (isSelected) {
                baseClasses += ' bg-blue-500 text-white font-semibold';
            } else if (isToday) {
                baseClasses += ' bg-blue-100 text-blue-600 font-semibold';
            } else {
                baseClasses += ' hover:bg-blue-50 text-gray-700';
            }

            dayElement.className = baseClasses;
            dayElement.textContent = day;
            
            if (!isDisabled) {
                dayElement.onclick = () => selectDoubleDate(day, currentDate.getMonth(), currentDate.getFullYear(), calendarType);
            }
            
            container.appendChild(dayElement);
        }
    }

    document.addEventListener('click', (e) => {
        const allCals = [calendarContainer, hotelCalendarContainer, trainCalendarContainer, forgotidCalendarContainer, bookingCalendarContainer];
        
        const isClickingCalendarToggle = e.target.closest('[onclick^="toggle"]');
        
        allCals.forEach(cal => {
            if (cal && !cal.contains(e.target) && !isClickingCalendarToggle) {
                cal.classList.add('hidden');
            }
        });
        
        const guestsDropdown = document.getElementById('guests-rooms-dropdown');
        const guestsContainer = guestsDropdown?.parentElement;
        if (guestsDropdown && !guestsDropdown.classList.contains('hidden') && 
            guestsContainer && !guestsContainer.contains(e.target) && 
            !e.target.closest('[onclick^="increment"]') && 
            !e.target.closest('[onclick^="decrement"]') &&
            !e.target.closest('[onclick^="apply"]') &&
            !e.target.closest('[onclick^="toggleGuestsRooms"]')) {
            guestsDropdown.classList.add('hidden');
        }
        
        const airportDropdowns = document.querySelectorAll('.airport-dropdown');
        airportDropdowns.forEach(dropdown => {
            if (!dropdown.classList.contains('hidden') && !dropdown.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
    });

    window.toggleCheckinCalendar = () => toggleCheckinCalendar('flight');
    window.toggleBookingCalendar = () => toggleCheckinCalendar('booking');
    window.toggleHotelCalendar = () => toggleCheckinCalendar('hotel');
    window.toggletrainCalendar = () => toggleCheckinCalendar('train');
    window.toggleForgotidCalendar = () => toggleCheckinCalendar('forgotid');
    window.toggledoubleinCalendar = toggledoubleinCalendar;
    window.previousMonth = (type = 'auto') => previousMonth(type);
    window.nextMonth = (type = 'auto') => nextMonth(type);

    renderCalendar('flight');
    renderCalendar('hotel');
    renderCalendar('train');
    renderCalendar('forgotid');
    renderDoubleCalendar();
});


// banner skeleton
document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('load', () => {
        setTimeout(() => {
            document.querySelectorAll('.skeleton-loader').forEach(el => el.style.display = 'none');
            document.querySelectorAll('.skeleton-target').forEach(el => el.classList.remove('hidden'));

            const pagination = document.querySelector('.swiper-pagination');
            if (pagination) pagination.classList.remove('hidden');

            new Swiper('.swiper-container', {
                loop: true,
                speed: 2900,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: false,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '"></span>';
                    },
                },

                breakpoints: {
                    320: { slidesPerView: 1, spaceBetween: 0 },
                    768: { slidesPerView: 1, spaceBetween: 0 },
                    1024: { slidesPerView: 1, spaceBetween: 0 }
                },

                on: {
                    init: function () {
                        const pagination = document.querySelector('.swiper-pagination');
                        if (pagination) {
                            pagination.style.display = 'block';
                            pagination.style.visibility = 'visible';
                            pagination.style.opacity = '1';
                        }
                    }
                }
            });
        }, 2500);
    });
});


// City, destination, or hotel name
document.addEventListener("DOMContentLoaded", () => {
    const allDrops = () => document.querySelectorAll(".airport-dropdown");
    const allCalendars = () => document.querySelectorAll('[id$="-calendar"]');

    document.querySelectorAll(".airport-wrapper").forEach(wrapper => {
        const input = wrapper.querySelector(".airport-input");
        const dropdown = wrapper.querySelector(".airport-dropdown");
        if (!input || !dropdown) return;

        let selecting = false;

        const show = () => {
            allDrops().forEach(d => d.classList.add("hidden"));
            allCalendars().forEach(c => c.classList.add("hidden"));
            document.getElementById("guests-rooms-dropdown")?.classList.add("hidden");

            dropdown.classList.remove("hidden");
            setTimeout(() => dropdown.classList.add("show"), 10);
        };

        const hide = () => {
            dropdown.classList.remove("show");
            setTimeout(() => dropdown.classList.add("hidden"), 300);
        };

        input.addEventListener("click", e => {
            e.stopPropagation();

            const isOpen = dropdown.classList.contains("show") && !dropdown.classList.contains("hidden");

            if (isOpen) hide();
            else if (!selecting) show();
        });

        document.addEventListener("click", e => {
            if (
                !wrapper.contains(e.target) &&
                !e.target.closest('[onclick^="increment"]') &&
                !e.target.closest('[onclick^="decrement"]') &&
                !e.target.closest('[onclick^="apply"]') &&
                !e.target.closest('[onclick^="toggleGuestsRooms"]')
            ) hide();
        });

        dropdown.querySelectorAll("li").forEach(li => {
            li.addEventListener("mousedown", () => (selecting = true));

            li.addEventListener("click", e => {
                e.stopPropagation();

                const name = li.querySelector(".font-semibold.text-gray-800")?.textContent.trim() || "";
                const code = li.querySelector(".text-xs.font-semibold.text-gray-500")?.textContent.trim() || "";

                input.value = `${name} (${code})`;
                input.classList.add(
                    "text-sm/6", "leading-normal", "font-medium",
                    "text-gray-600", "tracking-wide"
                );

                hide();
                setTimeout(() => (selecting = false), 150);
            });
        });
    });
});


// Guests and Rooms
document.addEventListener("DOMContentLoaded", () => {
    const $ = id => document.getElementById(id);
    const q = sel => document.querySelector(sel);
    let state = { adults: 2, children: 0, rooms: 1 };

    const updateUI = () => {
        $("adults-count").textContent = state.adults;
        $("children-count").textContent = state.children;
        $("rooms-count").textContent = state.rooms;

        const guestsRoomsInput = $("guests-rooms");
        if (guestsRoomsInput) {
            guestsRoomsInput.value = `${state.adults} Adult(s), ${state.children} Child(ren), ${state.rooms} Room(s)`;
        }

        updateBtn("adults", state.adults > 1);
        updateBtn("children", state.children > 0);
        updateBtn("rooms", state.rooms > 1);
    };

    const updateBtn = (type, enabled) => {
        const btn = q(`button[onclick="decrementGuests('${type}')"]`);
        if (btn) btn.classList.toggle("border-blue-500", enabled);
        if (btn) btn.classList.toggle("border-gray-200", !enabled);
    };

    window.incrementGuests = type => {
        if (state[type] !== undefined) state[type]++;
        updateUI();
    };

    window.decrementGuests = type => {
        if (type === "adults" && state.adults > 1) state.adults--;
        if (type === "children" && state.children > 0) state.children--;
        if (type === "rooms" && state.rooms > 1) state.rooms--;
        updateUI();
    };

    window.toggleGuestsRoomsDropdown = () => {
        const drop = $("guests-rooms-dropdown");
        if (!drop) return;
        const isHidden = drop.classList.contains("hidden");
        [
            "checkin-calendar","hotel-checkin-calendar","train-checkin-calendar","forgotid-checkin-calendar","double-checkin-calendar"
        ].forEach(id => $(id)?.classList.add("hidden"));

        document.querySelectorAll(".airport-dropdown").forEach(el => el.classList.add("hidden"));

        drop.classList.toggle("hidden", !isHidden);
        drop.classList.remove("show");
        void drop.offsetWidth;
        
        if (isHidden) setTimeout(() => drop.classList.add("show"), 10);
        else setTimeout(() => drop.classList.add("hidden"), 300);
    };

    window.applyGuestsRooms = () => {
        $("guests-rooms-dropdown")?.classList.add("hidden");
        updateUI();
    };

    updateUI();
});


// scroll container
document.addEventListener("DOMContentLoaded", () => {
    const sc = document.getElementById("scroll-container");
    const prev = document.getElementById("scroll-prev");
    const next = document.getElementById("scroll-next");
    const gl = document.getElementById("gradient-left");
    const gr = document.getElementById("gradient-right");

    if (!sc || !prev || !next) return;

    const amt = 200;
    const show = (el, cond) => el && (el.style.display = cond ? "flex" : "none");
    const fade = (el, cond) => el && (el.style.opacity = cond ? "1" : "0");

    prev.onclick = () => sc.scrollBy({ left: -amt, behavior: "smooth" });
    next.onclick = () => sc.scrollBy({ left: amt, behavior: "smooth" });

    const update = () => {
        const max = sc.scrollWidth - sc.clientWidth;
        const pos = sc.scrollLeft;
        const isMobile = window.innerWidth < 768;

        if (isMobile) {
            show(prev, false);
            show(next, false);
            fade(gl, false);
            fade(gr, false);
            return;
        }

        const atStart = pos <= 0;
        const atEnd = pos >= max - 1;

        show(prev, !atStart);
        show(next, !atEnd);

        fade(gl, !atStart);
        fade(gr, !atEnd);
    };

    [100, 300, 500].forEach(t => setTimeout(update, t));

    sc.addEventListener("scroll", update);
    window.addEventListener("resize", update);
});


//language modal
document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("languageModal");
    const openBtns = document.querySelectorAll('[data-modal-toggle="languageModal"]');
    const closeBtn = document.querySelector('[data-modal-hide="languageModal"]');
    const modalContent = modal.querySelector(".bg-white");
    const isDesktop = () => window.innerWidth >= 1024;

    function openModal() {
        modal.classList.remove("hidden");
        modal.classList.add("opacity-0");
        modalContent.classList.add("opacity-0", "translate-y-10");

        requestAnimationFrame(() => {
            modal.classList.replace("opacity-0", "opacity-100");
            modalContent.classList.remove("opacity-0", "translate-y-10");
            modalContent.classList.add("opacity-100", "translate-y-0");
        });
    }

    function closeModal() {
        modal.classList.replace("opacity-100", "opacity-0");
        modalContent.classList.replace("opacity-100", "opacity-0");
        modalContent.classList.replace("translate-y-0", "translate-y-10");

        setTimeout(() => modal.classList.add("hidden"), 300);
    }

    function toggleModal() {
        if (!isDesktop()) return;
        modal.classList.contains("hidden") ? openModal() : closeModal();
    }

    openBtns.forEach(btn =>
        btn.addEventListener("click", e => {
            e.preventDefault();
            if (isDesktop()) toggleModal();
        })
    );

    if (closeBtn) {
        closeBtn.addEventListener("click", e => {
            e.preventDefault();
            closeModal();
        });
    }

    modal.addEventListener("click", e => {
        if (isDesktop() && e.target === modal) closeModal();
    });

    window.addEventListener("resize", () => {
        if (!isDesktop()) modal.classList.add("hidden");
    });
});


//carousel
document.addEventListener('DOMContentLoaded', () => {

    initSingleCarousel('carousel', 'prevBtn', 'nextBtn');
    initSingleCarousel('carousel-bestdeals', 'prevBtnBestDeals', 'nextBtnBestDeals');
    initSingleCarousel('carousel-cupon', 'prevBtnCupon', 'nextBtnCupon');
    initSingleCarousel('carousel-vilaapt', 'prevvilaapt', 'nextBtnvilaapt');
    initSingleCarousel('carousel-bustickets', 'prevbustickets', 'nextBtnbustickets');

    function initSingleCarousel(carouselId, prevBtnId, nextBtnId) {
        const carousel = document.getElementById(carouselId);
        const prevBtn = document.getElementById(prevBtnId);
        const nextBtn = document.getElementById(nextBtnId);

        if (!carousel || !prevBtn || !nextBtn) {
            console.warn(`Carousel elements not found for ${carouselId}`);
            return;
        }

        const items = carousel.querySelectorAll('.flex-shrink-0');
        if (items.length === 0) {
            console.warn(`No carousel items found in ${carouselId}`);
            return;
        }

        const totalItems = items.length;
        let currentIndex = 0;
        let slideInterval;
        let isDragging = false;
        let startPos = 0;
        let currentTranslate = 0;
        let prevTranslate = 0;

        const itemStyle = window.getComputedStyle(items[0]);
        const itemMarginRight = parseFloat(itemStyle.marginRight) || 0;
        const itemWidth = items[0].offsetWidth + itemMarginRight;
        
        carousel.style.transition = 'transform 0.3s ease-out';
        
        updateCarousel();

        function getPositionX(event) {
            return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
        }

        function updateCarousel() {
            if (items.length === 0) return;
            
            const maxTranslate = Math.max(0, (itemWidth * totalItems) - carousel.offsetWidth);
            let translateX = -currentIndex * itemWidth;
            
            translateX = Math.min(0, Math.max(-maxTranslate, translateX));
            
            carousel.style.transform = `translateX(${translateX}px)`;
        }

        function nextSlide() {
            const maxIndex = Math.ceil((itemWidth * totalItems - carousel.offsetWidth) / itemWidth);
            currentIndex = (currentIndex + 1) % (maxIndex + 1);
            if (currentIndex > maxIndex) {
                currentIndex = 0;
                setTimeout(updateCarousel, 50);
            } else {
                updateCarousel();
            }
        }

        function prevSlide() {
            const maxIndex = Math.ceil((itemWidth * totalItems - carousel.offsetWidth) / itemWidth);
            currentIndex = (currentIndex - 1 + (maxIndex + 1)) % (maxIndex + 1);
            if (currentIndex < 0) {
                currentIndex = maxIndex;
                setTimeout(updateCarousel, 50);
            } else {
                updateCarousel();
            }
        }

        function touchStart(index) {
            return function(event) {
                startPos = getPositionX(event);
                isDragging = true;
                carousel.style.transition = 'none';
                prevTranslate = currentIndex * -itemWidth;
            }
        }

        function touchMove(event) {
            if (!isDragging) return;
            const currentPosition = getPositionX(event);
            const diff = currentPosition - startPos;
            currentTranslate = prevTranslate + diff;
            carousel.style.transform = `translateX(${currentTranslate}px)`;
        }

        function touchEnd() {
            if (!isDragging) return;
            isDragging = false;
            carousel.style.transition = 'transform 0.3s ease-out';
            
            const movedBy = prevTranslate - currentTranslate;
            
            if (movedBy < -50) {
                nextSlide();
            } else if (movedBy > 50) {
                prevSlide();
            } else {
                updateCarousel();
            }
        }

        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);

        carousel.addEventListener('touchstart', touchStart(), { passive: true });
        carousel.addEventListener('touchmove', touchMove, { passive: false });
        carousel.addEventListener('touchend', touchEnd);
        carousel.addEventListener('touchcancel', touchEnd);

        carousel.addEventListener('mousedown', touchStart(), { passive: true });
        carousel.addEventListener('mousemove', touchMove, { passive: false });
        carousel.addEventListener('mouseup', touchEnd);
        carousel.addEventListener('mouseleave', touchEnd);

        function startAutoSlide() {
            if (items.length > 0 && !slideInterval) {
                slideInterval = setInterval(() => {
                    const maxIndex = Math.ceil((itemWidth * totalItems - carousel.offsetWidth) / itemWidth);
                    currentIndex = (currentIndex + 1) % (maxIndex + 1);
                    if (currentIndex > maxIndex) {
                        currentIndex = 0;
                        setTimeout(updateCarousel, 50);
                    } else {
                        updateCarousel();
                    }
                }, 5000);
            }
        }

        function stopAutoSlide() {
            if (slideInterval) {
                clearInterval(slideInterval);
                slideInterval = null;
            }
        }

        const carouselContainer = carousel.closest('.relative') || carousel.parentElement;
        if (carouselContainer) {
            carouselContainer.addEventListener('mouseenter', stopAutoSlide);
            carouselContainer.addEventListener('mouseleave', startAutoSlide);
        }

        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                updateCarousel();
            }, 250);
        });

        startAutoSlide();
    }
});


// Category Button
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.category-btn').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('bg-blue-500', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-600', 'hover:bg-blue-50');
            });
            
            this.classList.remove('bg-gray-100', 'text-gray-600', 'hover:bg-blue-50');
            this.classList.add('bg-blue-500', 'text-white');

            const label = document.getElementById('destination-label');
            if (label) {
                const buttonText = this.textContent.trim().toLowerCase();
                if (buttonText === 'all' || buttonText === 'hotels') {
                    label.textContent = 'City, destination, or hotel name';
                } else if (buttonText === 'villa') {
                    label.textContent = 'City, destination, or villa name';
                } else if (buttonText === 'apartment') {
                    label.textContent = 'City, destination, or apartment name';
                }
            }
        });
    });
});


// login modal
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById("loginModal");
    if (!modal) return;

    const modalTriggers = document.querySelectorAll('.openLoginModal, .openRegisterModal');

    const toggleModal = (show) => {
        modal.classList.toggle('hidden', !show);
        modal.classList.toggle('flex', show);
        modal.classList.toggle('opacity-100', show);
        modal.classList.toggle('opacity-0', !show);
    };

    modalTriggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            toggleModal(true);
        });
    });

    document.addEventListener('click', (e) => {
        if (e.target.closest('.guestCloseModal, [data-close-modal]') || e.target === modal) {
            e.preventDefault();
            toggleModal(false);
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            toggleModal(false);
        }
    });
});


// carousel initialization
initSingleCarousel('carousel', 'prevBtn', 'nextBtn');
initSingleCarousel('carousel-bestdeals', 'prevBtnBestDeals', 'nextBtnBestDeals');
initSingleCarousel('carousel-cupon', 'prevBtnCupon', 'nextBtnCupon');
initSingleCarousel('carousel-vilaapt', 'prevvilaapt', 'nextBtnvilaapt');
initSingleCarousel('carousel-bustickets', 'prevbustickets', 'nextBtnbustickets');

function initSingleCarousel(carouselId, prevBtnId, nextBtnId) {
    const carousel = document.getElementById(carouselId);
    const prevBtn = document.getElementById(prevBtnId);
    const nextBtn = document.getElementById(nextBtnId);

    if (!carousel || !prevBtn || !nextBtn) {
        console.warn(`Carousel elements not found for ${carouselId}`);
        return;
    }

    const items = carousel.querySelectorAll('.flex-shrink-0');
    if (items.length === 0) {
        console.warn(`No carousel items found in ${carouselId}`);
        return;
    }

    const totalItems = items.length;
    let currentIndex = 0;
    let slideInterval;
    let isDragging = false;
    let startPos = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;

    const itemStyle = window.getComputedStyle(items[0]);
    const itemMarginRight = parseFloat(itemStyle.marginRight) || 0;
    const itemWidth = items[0].offsetWidth + itemMarginRight;
    
    carousel.style.transition = 'transform 0.3s ease-out';
    
    updateCarousel();

    function getPositionX(event) {
        return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
    }

    function updateCarousel() {
        if (items.length === 0) return;
        
        const maxTranslate = Math.max(0, (itemWidth * totalItems) - carousel.offsetWidth);
        let translateX = -currentIndex * itemWidth;
        
        translateX = Math.min(0, Math.max(-maxTranslate, translateX));
        
        carousel.style.transform = `translateX(${translateX}px)`;
    }

    function nextSlide() {
        const maxIndex = Math.ceil((itemWidth * totalItems - carousel.offsetWidth) / itemWidth);
        currentIndex = (currentIndex + 1) % (maxIndex + 1);
        if (currentIndex > maxIndex) {
            currentIndex = 0;
            setTimeout(updateCarousel, 50);
        } else {
            updateCarousel();
        }
    }

    function prevSlide() {
        const maxIndex = Math.ceil((itemWidth * totalItems - carousel.offsetWidth) / itemWidth);
        currentIndex = (currentIndex - 1 + (maxIndex + 1)) % (maxIndex + 1);
        if (currentIndex < 0) {
            currentIndex = maxIndex;
            setTimeout(updateCarousel, 50);
        } else {
            updateCarousel();
        }
    }

    function touchStart(index) {
        return function(event) {
            startPos = getPositionX(event);
            isDragging = true;
            carousel.style.transition = 'none';
            prevTranslate = currentIndex * -itemWidth;
        }
    }

    function touchMove(event) {
        if (!isDragging) return;
        const currentPosition = getPositionX(event);
        const diff = currentPosition - startPos;
        currentTranslate = prevTranslate + diff;
        carousel.style.transform = `translateX(${currentTranslate}px)`;
    }

    function touchEnd() {
        if (!isDragging) return;
        isDragging = false;
        carousel.style.transition = 'transform 0.3s ease-out';
        
        const movedBy = prevTranslate - currentTranslate;
        
        if (movedBy < -50) {
            nextSlide();
        } else if (movedBy > 50) {
            prevSlide();
        } else {
            updateCarousel();
        }
    }

    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);

    carousel.addEventListener('touchstart', touchStart, { passive: true });
    carousel.addEventListener('touchmove', touchMove, { passive: false });
    carousel.addEventListener('touchend', touchEnd);
    carousel.addEventListener('touchcancel', touchEnd);

    carousel.addEventListener('mousedown', touchStart, { passive: true });
    carousel.addEventListener('mousemove', touchMove, { passive: false });
    carousel.addEventListener('mouseup', touchEnd);
    carousel.addEventListener('mouseleave', touchEnd);

    function startAutoSlide() {
        if (items.length > 0 && !slideInterval) {
            slideInterval = setInterval(() => {
                const maxIndex = Math.ceil((itemWidth * totalItems - carousel.offsetWidth) / itemWidth);
                currentIndex = (currentIndex + 1) % (maxIndex + 1);
                if (currentIndex > maxIndex) {
                    currentIndex = 0;
                    setTimeout(updateCarousel, 50);
                } else {
                    updateCarousel();
                }
            }, 5000);
        }
    }

    function stopAutoSlide() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }

    const carouselContainer = carousel.closest('.relative') || carousel.parentElement;
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', stopAutoSlide);
        carouselContainer.addEventListener('mouseleave', startAutoSlide);
    }

    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            updateCarousel();
        }, 250);
    });

    startAutoSlide();
}

document.addEventListener('turbo:load', () => {
    initSingleCarousel('carousel', 'prevBtn', 'nextBtn');
    initSingleCarousel('carousel-bestdeals', 'prevBtnBestDeals', 'nextBtnBestDeals');
    initSingleCarousel('carousel-cupon', 'prevBtnCupon', 'nextBtnCupon');
    initSingleCarousel('carousel-vilaapt', 'prevvilaapt', 'nextBtnvilaapt');
    initSingleCarousel('carousel-bustickets', 'prevbustickets', 'nextBtnbustickets');
});


//tabs information
document.addEventListener('DOMContentLoaded', function() {
    const components = document.querySelectorAll('.tab-container');

    components.forEach(container => {
        const wrapper = container.parentElement;

        const prevBtn = wrapper.querySelector('.prev-tab');
        const nextBtn = wrapper.querySelector('.next-tab');
        const scrollAmount = 200;

        if (!prevBtn || !nextBtn) return;

        const updateNavButtons = () => {
            const showPrev = container.scrollLeft > 0;
            const showNext = container.scrollLeft < (container.scrollWidth - container.clientWidth - 1);

            prevBtn.classList.toggle('hidden', !showPrev);
            nextBtn.classList.toggle('hidden', !showNext);
        };

        prevBtn.addEventListener('click', () => {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', () => {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        container.addEventListener('scroll', updateNavButtons);
        window.addEventListener('resize', updateNavButtons);

        updateNavButtons();
    }); 
});