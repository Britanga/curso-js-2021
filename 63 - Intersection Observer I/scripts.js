const boxes = document.querySelectorAll('.box')

// Script q muestra en consola la caja q esta visible

const callback = (entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            console.log(entry.target.id, 'is intersecting')
        }
    })
}

const options = {
    // root:
    // rootMargin: '-200px'
    threshold: 0.25
}

const observer = new IntersectionObserver(callback, options)
boxes.forEach(element => observer.observe(element))