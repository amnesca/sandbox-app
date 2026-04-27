
window.addEventListener('beforeunload', e => {
    if (this.$dirty('input_one')) {
        e.preventDefault();
        e.returnValue = '';
    }
});

gsap.to(".box", {
    duration: 4,
    x: 200,
    rotation: 360,
    backgroundColor: "red",
});

