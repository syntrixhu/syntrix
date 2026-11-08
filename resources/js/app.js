import AOS from "aos";
import "aos/dist/aos.css";
import "lenis/dist/lenis.css";
AOS.init({});
// Initialize Lenis
const lenis = new Lenis({
    autoRaf: true,
});

// Listen for the scroll event and log the event data
lenis.on("scroll", (e) => {
    console.log(e);
});
