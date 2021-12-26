/* Vídeo: https://www.pexels.com/es-es/video/2869107/ */
const video = document.getElementById('video')

// Pausar el video cuando estemos en otra pagina y reproducirlo cuando volvamos a la pagina

// Manera larga
// addEventListener('visibilitychange', (e) => {
//     if (document.visibilityState === 'visible') {
//         console.log('PLAY')
//         video.play() // reproduce el video
//     } else if (document.visibilityState === 'hidden') {
//         console.log('PAUSE')
//         video.pause() // pausa el video
//     }
// })

// Manera corta
addEventListener('visibilitychange', () => document.visibilityState === 'visible' ? video.play() : video.pause())