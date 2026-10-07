"use strict";

const menuToggle = document.querySelector(".menu-toggle");
const primaryNav = document.querySelector(".primary-nav");
const cartCount = document.querySelector(".cart-count");
let cartItems = 0;

menuToggle?.addEventListener("click", () => {
  const isOpen = menuToggle.getAttribute("aria-expanded") === "true";
  menuToggle.setAttribute("aria-expanded", String(!isOpen));
  primaryNav?.classList.toggle("is-open", !isOpen);
});

primaryNav?.addEventListener("click", (event) => {
  if (event.target instanceof Element && event.target.closest("a")) {
    menuToggle?.setAttribute("aria-expanded", "false");
    primaryNav.classList.remove("is-open");
  }
});

document.querySelectorAll(".add-button").forEach((button) => {
  button.addEventListener("click", () => {
    cartItems += 1;
    if (cartCount) cartCount.textContent = String(cartItems);
    const product = button.dataset.product || "Item";
    button.innerHTML = "Added <span aria-hidden=\"true\">✓</span>";
    button.setAttribute("aria-label", `${product} added to cart`);
    window.setTimeout(() => {
      button.innerHTML = "Add to cart <span aria-hidden=\"true\">+</span>";
      button.setAttribute("aria-label", `Add ${product} to cart`);
    }, 1400);
  });
});

document.querySelectorAll(".favorite-button").forEach((button) => {
  button.addEventListener("click", () => {
    const isFavorite = button.getAttribute("aria-pressed") !== "true";
    button.setAttribute("aria-pressed", String(isFavorite));
    button.classList.toggle("is-favorite", isFavorite);
    button.textContent = isFavorite ? "♥" : "♡";
    const productCard = button.closest(".product-card");
    const product = productCard?.querySelector(".product-title-row h3")?.textContent || "product";
    button.setAttribute("aria-label", `${isFavorite ? "Remove" : "Add"} ${product} ${isFavorite ? "from" : "to"} favorites`);
  });
});

document.querySelector(".newsletter-form")?.addEventListener("submit", (event) => {
  event.preventDefault();
  const form = event.currentTarget;
  if (!(form instanceof HTMLFormElement)) return;
  const email = new FormData(form).get("email");
  const message = form.querySelector(".form-message");
  if (typeof email !== "string" || !message) return;
  message.textContent = "Thanks! Newsletter sign-up is not connected yet.";
  form.reset();
});
