// Event delegation
const on = (selector, eventType, childSelector, eventHandler) => {
    const elements = document.querySelectorAll(selector);
    for (element of elements) {
        element.addEventListener(eventType, (eventOnElement) => {
            if (eventOnElement.target.closest(childSelector)) {
                eventHandler(eventOnElement);
            }
        });
    }
};

// AnimateCSS
const animateCSS = (element, animation, prefix = "animate__") => {
    return new Promise((resolve, reject) => {
        const animationName = `${prefix}${animation}`;
        const node = element;

        node.classList.add(
            `${prefix}animated`,
            `${prefix}faster`,
            animationName
        );

        const handleAnimationEnd = (event) => {
            event.stopPropagation();
            node.classList.remove(
                `${prefix}animated`,
                `${prefix}faster`,
                animationName
            );
            resolve("Animation Ended.");
        };

        node.addEventListener("animationend", handleAnimationEnd, {
            once: true,
        });
    });
};

// Open Collapse
const openCollapse = (collapse, callback) => {
    setTimeout(() => {
        collapse.style.height = collapse.scrollHeight + "px";
        collapse.style.opacity = 1;
    }, 200);

    collapse.addEventListener(
        "transitionend",
        () => {
            collapse.classList.add("open");

            collapse.style.removeProperty("height");
            collapse.style.removeProperty("opacity");

            if (typeof callback === "function") callback();
        },
        { once: true }
    );
};

// Close Collapse
const closeCollapse = (collapse, callback) => {
    collapse.style.overflowY = "hidden";
    collapse.style.height = collapse.scrollHeight + "px";

    setTimeout(() => {
        collapse.style.height = 0;
        collapse.style.opacity = 0;
    }, 200);

    collapse.addEventListener(
        "transitionend",
        () => {
            collapse.classList.remove("open");

            collapse.style.removeProperty("overflow-y");
            collapse.style.removeProperty("height");
            collapse.style.removeProperty("opacity");

            if (typeof callback === "function") callback();
        },
        { once: true }
    );
};
