    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyAxVq7H9AdImPhHmZ9kbI4POH9Qiu_wQnc",
      authDomain: "akos-portfolio.firebaseapp.com",
      projectId: "akos-portfolio",
      storageBucket: "akos-portfolio.appspot.com",
      messagingSenderId: "126057511633",
      appId: "1:126057511633:web:cd2a21092c0713316c23f0",
      measurementId: "G-H9HJB0J8S8"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);