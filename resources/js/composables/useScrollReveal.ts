import { onMounted, onUnmounted, type Ref } from 'vue';

interface ScrollRevealOptions {
    threshold?: number;
    rootMargin?: string;
    staggerDelay?: number;
}

export function useScrollReveal(
    containerRef: Ref<HTMLElement | null>,
    selector = '.scroll-reveal',
    options: ScrollRevealOptions = {},
) {
    const { threshold = 0.15, rootMargin = '0px 0px -60px 0px', staggerDelay = 100 } = options;

    let observer: IntersectionObserver | null = null;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    onMounted(() => {
        if (prefersReducedMotion || !containerRef.value) {
            containerRef.value?.querySelectorAll(selector).forEach((el) => {
                el.classList.add('is-visible');
            });
            return;
        }

        observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const el = entry.target as HTMLElement;
                        const delay = parseInt(el.dataset.revealDelay || '0', 10);
                        setTimeout(() => {
                            el.classList.add('is-visible');
                        }, delay);
                        observer?.unobserve(el);
                    }
                });
            },
            { threshold, rootMargin },
        );

        const elements = containerRef.value.querySelectorAll(selector);
        elements.forEach((el, index) => {
            if (staggerDelay > 0 && !el.hasAttribute('data-reveal-delay')) {
                (el as HTMLElement).dataset.revealDelay = String(index * staggerDelay);
            }
            observer?.observe(el);
        });
    });

    onUnmounted(() => {
        observer?.disconnect();
    });
}
