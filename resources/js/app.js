require('./bootstrap');


// var deferredPrompt;
// if ('serviceWorker' in navigator) {
//     navigator.serviceWorker.register('/sw.js')
//         .then(function () {
//             console.log('service worker registered!')
//         });
// }

// window.addEventListener('beforeinstallprompt', (e) => {
//     // Impede que o mini-infobar apareça em mobile
//     e.preventDefault();
//     // Guarda evento para que possa ser disparado depois.
//     deferredPrompt = e;
//     // Atualiza UI notifica usuário que pode instalar PWA
//     if (deferredPrompt) {
//         deferredPrompt.prompt();
//
//         deferredPrompt.userChoice.then(function (choiceResult) {
//             if (choiceResult.outcome === 'dismissed') {
//                 console.log('User cancelled installation');
//             } else {
//                 console.log('User added to home screen');
//             }
//         });
//         deferredPrompt = null;
//     }
//     // Opcionalmente, enviar eventos de analytics que promo de instalação PWA foi mostrado.
//     console.log(`'beforeinstallprompt' event was fired.`);
// });


import Alpine from 'alpinejs';
import collect from 'collect.js';
import Cleave from 'cleave.js';

window.collect = collect;
window.Alpine = Alpine;
Alpine.start();
import "./_template";

// import Swal from "sweetalert2";
//
// window.addEventListener('swal', function (e) {
//     Swal.fire(e.detail);
// });
