import './bootstrap';
import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'
Alpine.plugin(ToastComponent)

let attrs = [
    'snapshot',
    'effects',
];

// Hide insecure livewire attributes
function anonymizeLivewire() {
    document.querySelectorAll('div').forEach(element => {
        attrs.forEach(attr => {
            const attribute = `wire:${attr}`;

            if (element.hasAttribute(attribute)) {
                element.removeAttribute(attribute);
                element.setAttribute('wire:github', 'ADEastwood');
            }
        });
    });
}

window.addEventListener('load', () => anonymizeLivewire());
