// Initialize and add the map
let map;

async function initMap() {
  // The location of Uluru,
  const position = { lat: 42.27651, lng: -87.90035 };
  // <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19938.383586758737!2d-87.90374403863304!3d42.28259996831663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880f946760ffffff%3A0x56e13998c1a61bfe!2s28457%20Ballard%20Dr%20unit%20c1%2C%20Lake%20Forest%2C%20IL%2060045!5e0!3m2!1sru!2sus!4v1718929100236!5m2!1sru!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  // The map, centered at Uluru
  map = new Map(document.getElementById("google-map"), {
    zoom: 15,
    center: position,
    mapId: "FENCING-MAP",
    styles: [
      { elementType: "geometry", stylers: [{ color: "#242f3e" }] },
      { elementType: "labels.text.stroke", stylers: [{ color: "#242f3e" }] },
      { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] },
      {
        featureType: "administrative.locality",
        elementType: "labels.text.fill",
        stylers: [{ color: "#d59563" }],
      },
      {
        featureType: "poi",
        elementType: "labels.text.fill",
        stylers: [{ color: "#d59563" }],
      },
      {
        featureType: "poi.park",
        elementType: "geometry",
        stylers: [{ color: "#263c3f" }],
      },
      {
        featureType: "poi.park",
        elementType: "labels.text.fill",
        stylers: [{ color: "#6b9a76" }],
      },
      {
        featureType: "road",
        elementType: "geometry",
        stylers: [{ color: "#38414e" }],
      },
      {
        featureType: "road",
        elementType: "geometry.stroke",
        stylers: [{ color: "#212a37" }],
      },
      {
        featureType: "road",
        elementType: "labels.text.fill",
        stylers: [{ color: "#9ca5b3" }],
      },
      {
        featureType: "road.highway",
        elementType: "geometry",
        stylers: [{ color: "#746855" }],
      },
      {
        featureType: "road.highway",
        elementType: "geometry.stroke",
        stylers: [{ color: "#1f2835" }],
      },
      {
        featureType: "road.highway",
        elementType: "labels.text.fill",
        stylers: [{ color: "#f3d19c" }],
      },
      {
        featureType: "transit",
        elementType: "geometry",
        stylers: [{ color: "#2f3948" }],
      },
      {
        featureType: "transit.station",
        elementType: "labels.text.fill",
        stylers: [{ color: "#d59563" }],
      },
      {
        featureType: "water",
        elementType: "geometry",
        stylers: [{ color: "#17263c" }],
      },
      {
        featureType: "water",
        elementType: "labels.text.fill",
        stylers: [{ color: "#515c6d" }],
      },
      {
        featureType: "water",
        elementType: "labels.text.stroke",
        stylers: [{ color: "#17263c" }],
      },
    ],
  });

  // The marker, positioned at Uluru
  const marker = new AdvancedMarkerElement({
    map: map,
    position: position,
    title: "Uluru",
  });
}

initMap();

window.addEventListener("load", () => {
  const sectionsWithBottomDevider = document.querySelectorAll(
    ".fencing-section.with-bottom-devider",
  );

  const sectionsWithTopDevider = document.querySelectorAll(
    ".fencing-section.with-top-devider",
  );

  const isMAMP = document.location.host === "localhost:8888";
  const prefix = isMAMP ? "/eminence/" : "/";

  const getImage = (classes) => {
    const image = document.createElement("img");
    image.setAttribute(
      "src",
      prefix + "wp-content/themes/fencing/images/section-devider.png",
    );
    image.classList.add(...classes);
    return image;
  };
  sectionsWithBottomDevider.forEach((e) => {
    const image = getImage(["fencing-devider"]);
    e.append(image);
  });

  sectionsWithTopDevider.forEach((e) => {
    const image = getImage(["fencing-devider", "mirror"]);
    e.prepend(image);
  });

  const timetalbeFilter = document.querySelector(".mptt-navigation-select");

  if (timetalbeFilter) {
    timetalbeFilter.classList.add("form-select", "text-body", "w-auto");
  }

  const timetalbeFilterButton = document.querySelector(".mptt-navigation-tabs");

  if (timetalbeFilterButton) {
    timetalbeFilterButton.classList.add("nav", "nav-pills", "nav-fill");
    Array.from(timetalbeFilterButton.children).forEach((e) => {
      e.classList.add("nav-item");
      e.firstElementChild.classList.add("nav-link");
    });

    const activeLink = timetalbeFilterButton.querySelector(".active");
    if (activeLink) {
      activeLink.firstElementChild.classList.add("active");
    }

    timetalbeFilterButton.addEventListener("click", (e) => {
      const target = e.target;
      if (target.classList.contains("nav-link")) {
        const activeLinks = timetalbeFilterButton.querySelectorAll(".active");
        activeLinks.forEach((e) => e.classList.remove("active"));
        target.classList.add("active");
      }
    });
  }

  const menuToggler = document.querySelector("#menu-toggler");
  const menuTogglerClose = document.querySelector("#menu-toggler-close");

  if (menuToggler) {
    menuToggler.addEventListener("click", () => {
      const menu = document.querySelector("#fencing-main-menu");
      menu.classList.toggle("active");
    });
  }

  if (menuTogglerClose) {
    menuTogglerClose.addEventListener("click", () => {
      const menu = document.querySelector("#fencing-main-menu");
      menu.classList.toggle("active");
    });
  }

  const fencingDevider = document.querySelector(
    ".fencing-section-devider.section-mirror",
  );

  if (fencingDevider) {
    const height = fencingDevider.clientHeight;
    fencingDevider.nextElementSibling.style.marginTop = `-${height}px`;
  }
});
