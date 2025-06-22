/*!
 * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
 * Copyright 2011-2024 The Bootstrap Authors
 * Licensed under the Creative Commons Attribution 3.0 Unported License.
 */

(() => {
  'use strict'

  const getStoredTheme = () => localStorage.getItem('theme')
  const setStoredTheme = theme => localStorage.setItem('theme', theme)

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme()
    if (storedTheme) {
      return storedTheme
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  }

  const setTheme = theme => {
  if (theme === 'auto') {
    const autoTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    document.documentElement.setAttribute('data-bs-theme', autoTheme);
    updateThemeImage(autoTheme); // Tambahkan ini
  } else {
    document.documentElement.setAttribute('data-bs-theme', theme);
    updateThemeImage(theme); // Tambahkan ini
  }
}


  setTheme(getPreferredTheme())

  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#bd-theme')

    if (!themeSwitcher) {
      return
    }

    const themeSwitcherText = document.querySelector('#bd-theme-text')
    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })

    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    if (focus) {
      themeSwitcher.focus()
    }
    updateThemeImage(theme);

  }
 const updateThemeImage = (theme) => {
  const logo = document.getElementById("logo");
  if (!logo) return;

  // Tambahkan efek fade-out
  logo.classList.add("fade-out");

  // Setelah 300ms (selama transisi), ganti src dan fade-in
  setTimeout(() => {
    if (theme === "dark") {
      logo.src = "./assets/img/bg/logo-dark.jpg";
    } else {
      logo.src = "./assets/img/bg/logo-light.jpg";
    }

    // Setelah src diganti, tunggu sedikit sebelum menghapus fade-out
    logo.onload = () => {
      logo.classList.remove("fade-out");
    };
  }, 300); // waktu fade-out, sesuai CSS
};



  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    const storedTheme = getStoredTheme()
    if (storedTheme !== 'light' && storedTheme !== 'dark') {
      setTheme(getPreferredTheme())
    }
  })

  window.addEventListener('DOMContentLoaded', () => {
    showActiveTheme(getPreferredTheme())
    updateThemeImage(getPreferredTheme());

    document.querySelectorAll('[data-bs-theme-value]')
      .forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value')
          setStoredTheme(theme)
          console.log("Tombol Tema diklik:", theme)
          setTheme(theme)
          showActiveTheme(theme, true)
          updateThemeImage(theme) 
        })
      })
  })
})()
