document.addEventListener('DOMContentLoaded', function () {
  console.log('main.js loaded');

  /* =========================
     CLASSES PAGE
  ========================= */
  const classButtons = document.querySelectorAll('.classes-see-more');
  const classPanels = document.querySelectorAll('.classes-detail-panel');
  const classGoTopButtons = document.querySelectorAll('.classes-go-top');

  if (classPanels.length) {
    classPanels.forEach(function (panel) {
      panel.style.display = 'none';
      panel.classList.remove('active');
    });
  }

  if (classButtons.length) {
    classButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');
        const targetPanel = document.getElementById(targetId);

        classPanels.forEach(function (panel) {
          panel.style.display = 'none';
          panel.classList.remove('active');
        });

        if (targetPanel) {
          targetPanel.style.display = 'block';
          targetPanel.classList.add('active');

          setTimeout(function () {
            targetPanel.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }, 100);
        }
      });
    });
  }

  if (classGoTopButtons.length) {
    classGoTopButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        const currentPanel = this.closest('.classes-detail-panel');

        if (currentPanel) {
          currentPanel.classList.remove('active');
          currentPanel.style.display = 'none';
        }

        const classesHero = document.querySelector('.classes-hero');
        if (classesHero) {
          classesHero.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  }

  /* =========================
     COACHES PAGE
  ========================= */
  const coachButtons = document.querySelectorAll('.coach-see-more');
  const coachPanels = document.querySelectorAll('.coach-detail-panel');

  if (coachPanels.length) {
    coachPanels.forEach(function (panel) {
      panel.style.display = 'none';
      panel.classList.remove('active');
    });
  }

  if (coachButtons.length) {
    coachButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');
        const targetPanel = document.getElementById(targetId);

        coachPanels.forEach(function (panel) {
          panel.style.display = 'none';
          panel.classList.remove('active');
        });

        if (targetPanel) {
          targetPanel.style.display = 'grid';
          targetPanel.classList.add('active');

          setTimeout(function () {
            targetPanel.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }, 100);
        }
      });
    });
  }

  /* =========================
     BOOK ONLINE PAGE
  ========================= */
  const bookOnlinePage = document.querySelector('.book-online-page');

  if (bookOnlinePage) {
    const bookingData = {
      hotshots: {
        label: 'Hot Shots',
        icon: '🎾',
        month: 3,
        year: 2026,
        availableDates: {
          13: [
            { time: '4:00 PM', meta: 'Red Ball beginners', spots: 4 },
            { time: '5:15 PM', meta: 'Orange Ball development', spots: 3 }
          ],
          15: [
            { time: '4:30 PM', meta: 'Green Ball group', spots: 5 }
          ],
          17: [
            { time: '4:00 PM', meta: 'Blue Ball starters', spots: 6 },
            { time: '5:30 PM', meta: 'Red Ball beginners', spots: 2 }
          ],
          20: [
            { time: '4:15 PM', meta: 'Orange Ball group', spots: 4 }
          ]
        }
      },
      squad: {
        label: 'Squad Training',
        icon: '💪',
        month: 3,
        year: 2026,
        availableDates: {
          13: [
            { time: '4:00 PM', meta: 'Entry level squad', spots: 5 },
            { time: '5:30 PM', meta: 'Talent development', spots: 2 }
          ],
          16: [
            { time: '4:00 PM', meta: 'Entry level squad', spots: 5 },
            { time: '5:30 PM', meta: 'Talent development', spots: 2 },
            { time: '7:00 PM', meta: 'Elite squad', spots: 1 }
          ],
          17: [
            { time: '4:30 PM', meta: 'Fitness & drills', spots: 4 }
          ],
          19: [
            { time: '5:00 PM', meta: 'Elite match play', spots: 3 }
          ],
          20: [
            { time: '4:00 PM', meta: 'Entry level squad', spots: 5 }
          ],
          21: [
            { time: '5:30 PM', meta: 'Talent development', spots: 4 }
          ],
          22: [
            { time: '4:00 PM', meta: 'Entry level squad', spots: 6 }
          ],
          23: [
            { time: '7:00 PM', meta: 'Elite squad', spots: 2 }
          ],
          25: [
            { time: '5:00 PM', meta: 'Competition training', spots: 4 }
          ],
          26: [
            { time: '4:00 PM', meta: 'Entry level squad', spots: 5 }
          ],
          27: [
            { time: '5:30 PM', meta: 'Talent development', spots: 3 }
          ],
          28: [
            { time: '4:30 PM', meta: 'Fitness & drills', spots: 4 }
          ],
          29: [
            { time: '5:00 PM', meta: 'Elite match play', spots: 2 }
          ]
        }
      },
      private: {
        label: 'Private Classes',
        icon: '🏆',
        month: 3,
        year: 2026,
        availableDates: {
          14: [
            { time: '3:30 PM', meta: 'Coach available', spots: 1 },
            { time: '6:00 PM', meta: 'Coach available', spots: 1 }
          ],
          16: [
            { time: '2:00 PM', meta: '1-on-1 session', spots: 1 },
            { time: '6:30 PM', meta: '1-on-1 session', spots: 1 }
          ],
          18: [
            { time: '4:00 PM', meta: 'Private development', spots: 1 }
          ],
          22: [
            { time: '5:00 PM', meta: 'Match strategy', spots: 1 }
          ]
        }
      },
      tournament: {
        label: 'Tournament Travel',
        icon: '🚌',
        month: 3,
        year: 2026,
        availableDates: {
          18: [
            { time: '8:00 AM', meta: 'Junior travel briefing', spots: 8 }
          ],
          25: [
            { time: '8:00 AM', meta: 'Regional tournament trip', spots: 6 }
          ],
          30: [
            { time: '7:30 AM', meta: 'JDS departure slot', spots: 5 }
          ]
        }
      }
    };

    const monthNames = [
      'January', 'February', 'March', 'April', 'May', 'June',
      'July', 'August', 'September', 'October', 'November', 'December'
    ];

    const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    const programButtons = document.querySelectorAll('.program-pill');
    const calendarGrid = document.getElementById('calendarGrid');
    const calendarMonthLabel = document.getElementById('calendarMonthLabel');
    const sessionSelectedDay = document.getElementById('sessionSelectedDay');
    const sessionSlots = document.getElementById('sessionSlots');
    const summaryBar = document.getElementById('bookingSummaryBar');
    const summaryTitle = document.getElementById('bookingSummaryTitle');
    const summaryMeta = document.getElementById('bookingSummaryMeta');
    const continueToFormBtn = document.getElementById('continueToFormBtn');
    const bookingFormWrap = document.getElementById('bookingFormWrap');
    const bookingSelectionNote = document.getElementById('bookingSelectionNote');
    const calendarPrev = document.getElementById('calendarPrev');
    const calendarNext = document.getElementById('calendarNext');

    let currentProgram = 'hotshots';
    let currentMonth = bookingData[currentProgram].month;
    let currentYear = bookingData[currentProgram].year;
    let selectedDate = null;
    let selectedSlot = null;

    function resetSelection() {
      selectedDate = null;
      selectedSlot = null;

      if (summaryBar) {
        summaryBar.classList.remove('is-visible');
      }

      if (bookingSelectionNote) {
        bookingSelectionNote.textContent = 'No session selected yet.';
      }

      if (sessionSelectedDay) {
        sessionSelectedDay.innerHTML = '<strong>Select a date</strong><span>Choose a green date from the calendar</span>';
      }

      if (sessionSlots) {
        sessionSlots.innerHTML = '<div class="session-placeholder">Available time slots will appear here.</div>';
      }
    }

    function renderCalendar() {
      if (!calendarGrid || !calendarMonthLabel) return;

      const programData = bookingData[currentProgram];
      const firstDay = new Date(currentYear, currentMonth, 1).getDay();
      const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

      calendarMonthLabel.textContent = `${monthNames[currentMonth]} ${currentYear}`;
      calendarGrid.innerHTML = '';

      for (let i = 0; i < firstDay; i++) {
        const emptyDay = document.createElement('div');
        emptyDay.className = 'calendar-day is-empty';
        calendarGrid.appendChild(emptyDay);
      }

      for (let day = 1; day <= daysInMonth; day++) {
        const dayEl = document.createElement('button');
        dayEl.type = 'button';
        dayEl.className = 'calendar-day';

        const available = Object.prototype.hasOwnProperty.call(programData.availableDates, day);

        if (available) {
          dayEl.classList.add('is-available');
        } else {
          dayEl.classList.add('is-disabled');
        }

        if (selectedDate === day) {
          dayEl.classList.add('is-selected');
        }

        dayEl.textContent = day;

        if (available) {
          dayEl.addEventListener('click', function () {
            selectedDate = day;
            selectedSlot = null;
            renderCalendar();
            renderSlots();
            updateSummary();
          });
        }

        calendarGrid.appendChild(dayEl);
      }
    }

    function renderSlots() {
      if (!sessionSelectedDay || !sessionSlots) return;

      const programData = bookingData[currentProgram];

      if (!selectedDate || !programData.availableDates[selectedDate]) {
        sessionSelectedDay.innerHTML = '<strong>Select a date</strong><span>Choose a green date from the calendar</span>';
        sessionSlots.innerHTML = '<div class="session-placeholder">Available time slots will appear here.</div>';
        return;
      }

      const dateObj = new Date(currentYear, currentMonth, selectedDate);
      const readableDate = `${dayNames[dateObj.getDay()]} ${selectedDate} ${monthNames[currentMonth]}`;

      sessionSelectedDay.innerHTML = `
        <strong>${readableDate}</strong>
        <span>${programData.icon} ${programData.label}</span>
      `;

      sessionSlots.innerHTML = '';

      programData.availableDates[selectedDate].forEach(function (slot, index) {
        const slotEl = document.createElement('button');
        slotEl.type = 'button';
        slotEl.className = 'session-slot';

        if (selectedSlot && selectedSlot.index === index) {
          slotEl.classList.add('is-selected');
        }

        slotEl.innerHTML = `
          <div class="session-slot__top">
            <span class="session-slot__time">${slot.time}</span>
            <span class="session-slot__spots">${slot.spots} spot${slot.spots > 1 ? 's' : ''} left</span>
          </div>
          <div class="session-slot__meta">${slot.meta}</div>
        `;

        slotEl.addEventListener('click', function () {
          selectedSlot = {
            index: index,
            time: slot.time,
            meta: slot.meta,
            spots: slot.spots
          };
          renderSlots();
          updateSummary();
        });

        sessionSlots.appendChild(slotEl);
      });
    }

    function updateSummary() {
      if (!selectedDate || !selectedSlot) {
        if (summaryBar) {
          summaryBar.classList.remove('is-visible');
        }
        if (bookingSelectionNote) {
          bookingSelectionNote.textContent = 'No session selected yet.';
        }
        return;
      }

      const programData = bookingData[currentProgram];
      const dateObj = new Date(currentYear, currentMonth, selectedDate);
      const readableDate = `${dayNames[dateObj.getDay()]} ${selectedDate} ${monthNames[currentMonth]} ${currentYear}`;
      const fullSelection = `${programData.label} — ${readableDate} — ${selectedSlot.time} — ${selectedSlot.meta}`;

      if (summaryTitle) {
        summaryTitle.textContent = `${programData.label} at ${selectedSlot.time}`;
      }

      if (summaryMeta) {
        summaryMeta.textContent = `${readableDate} • ${selectedSlot.meta}`;
      }

      if (summaryBar) {
        summaryBar.classList.add('is-visible');
      }

      if (bookingSelectionNote) {
        bookingSelectionNote.textContent = `Selected session: ${fullSelection}`;
      }

      setWpformsValues(fullSelection, programData.label, readableDate, selectedSlot.time);
    }

    function setWpformsValues(fullSelection, programName, dateText, timeText) {
      const formFields = document.querySelectorAll('.booking-form-wrap .wpforms-field');

      formFields.forEach(function (fieldWrap) {
        const labelEl = fieldWrap.querySelector('label');
        const inputEl = fieldWrap.querySelector('input, textarea, select');

        if (!labelEl || !inputEl) return;

        const labelText = labelEl.textContent.trim().toLowerCase();

        if (labelText.includes('program')) {
          inputEl.value = programName;
        }

        if (labelText.includes('date')) {
          inputEl.value = dateText;
        }

        if (labelText.includes('time')) {
          inputEl.value = timeText;
        }

        if (labelText.includes('selected session')) {
          inputEl.value = fullSelection;
        }

        inputEl.dispatchEvent(new Event('input', { bubbles: true }));
        inputEl.dispatchEvent(new Event('change', { bubbles: true }));
      });
    }

    if (programButtons.length) {
      programButtons.forEach(function (button) {
        button.addEventListener('click', function () {
          programButtons.forEach(function (btn) {
            btn.classList.remove('active');
          });

          this.classList.add('active');
          currentProgram = this.getAttribute('data-program');
          currentMonth = bookingData[currentProgram].month;
          currentYear = bookingData[currentProgram].year;
          resetSelection();
          renderCalendar();
        });
      });
    }

    if (continueToFormBtn && bookingFormWrap) {
      continueToFormBtn.addEventListener('click', function () {
        bookingFormWrap.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      });
    }

    if (calendarPrev) {
      calendarPrev.addEventListener('click', function () {
        currentMonth--;
        if (currentMonth < 0) {
          currentMonth = 11;
          currentYear--;
        }
        resetSelection();
        renderCalendar();
      });
    }

    if (calendarNext) {
      calendarNext.addEventListener('click', function () {
        currentMonth++;
        if (currentMonth > 11) {
          currentMonth = 0;
          currentYear++;
        }
        resetSelection();
        renderCalendar();
      });
    }

    resetSelection();
    renderCalendar();
  }
});
document.addEventListener('wpformsAjaxSubmitSuccess', function () {
  const formWrap = document.getElementById('bookingFormWrap');
  if (formWrap) {
    formWrap.style.opacity = '0.5';
  }
});
/* =========================
   HOME GALLERY SLIDER
========================= */
const gallerySlider = document.querySelector('.home-gallery-slider');

if (gallerySlider) {
  const slides = gallerySlider.querySelectorAll('.gallery-slide');
  const dots = gallerySlider.querySelectorAll('.gallery-dot');
  const prevBtn = gallerySlider.querySelector('.gallery-prev');
  const nextBtn = gallerySlider.querySelector('.gallery-next');

  let currentSlide = 0;
  let autoSlide;

  function showSlide(index) {
    if (!slides.length) return;

    if (index < 0) {
      currentSlide = slides.length - 1;
    } else if (index >= slides.length) {
      currentSlide = 0;
    } else {
      currentSlide = index;
    }

    slides.forEach(function (slide) {
      slide.classList.remove('active');
    });

    dots.forEach(function (dot) {
      dot.classList.remove('active');
    });

    slides[currentSlide].classList.add('active');
    if (dots[currentSlide]) {
      dots[currentSlide].classList.add('active');
    }
  }

  function startAutoSlide() {
    autoSlide = setInterval(function () {
      showSlide(currentSlide + 1);
    }, 4000);
  }

  function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', function () {
      showSlide(currentSlide - 1);
      resetAutoSlide();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', function () {
      showSlide(currentSlide + 1);
      resetAutoSlide();
    });
  }

  if (dots.length) {
    dots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        const slideIndex = parseInt(this.getAttribute('data-slide'), 10);
        showSlide(slideIndex);
        resetAutoSlide();
      });
    });
  }

  showSlide(0);
  startAutoSlide();
}