import "./bootstrap";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
import.meta.glob(["../images/**", "../fonts/**"]);
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
