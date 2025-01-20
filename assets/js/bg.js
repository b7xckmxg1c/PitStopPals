const colorModeSwitch = document.getElementById('colorModeSwitch');
const body = document.body;

if (localStorage.getItem('bs-theme') === 'dark') {
  body.setAttribute('data-bs-theme', 'dark');
  colorModeSwitch.checked = true;
}

colorModeSwitch.addEventListener('change', () => {
  const newTheme = colorModeSwitch.checked ? 'dark' : 'light';
  body.setAttribute('data-bs-theme', newTheme);
  localStorage.setItem('bs-theme', newTheme);
});