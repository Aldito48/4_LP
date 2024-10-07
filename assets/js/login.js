function showNotification(message) {
  const notification = document.getElementById('custom-notification');
  const messageElement = document.getElementById('notification-message');
  
  messageElement.innerHTML = message;
  notification.classList.add('show');
  
  setTimeout(() => {
    notification.classList.remove('show');
  }, 3000);
}

document.addEventListener('DOMContentLoaded', function() {
  if (window.loginFailed) {
    showNotification('<b>Login Gagal:</b><br>Username / Password Salah');
  }
});
