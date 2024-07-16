let map;

async function initMap() {
  const position = { lat: 42.27651, lng: -87.90035 };
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  map = new Map(document.getElementById("google-map"), {
    zoom: 15,
    center: position,
    mapId: "ede403873373aae3",
  });

  // The marker, positioned at Uluru
  const marker = new AdvancedMarkerElement({
    map: map,
    position: position,
    title: "Uluru",
  });
}

initMap();

function isOnScreen(element, top_offset) {
  top_offset = top_offset === undefined ? 75 : top_offset;
  if (element == undefined) return false;
  var bounds = element.getBoundingClientRect();
  var output =
    bounds.top + top_offset < window.innerHeight && bounds.bottom > 0;
  return output;
}

function addClassToScheduleFilter() {
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
}

function addMenuTogglerHandler() {
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
}

function addAnimationLogic() {
  const animatedElements = document.querySelectorAll(".animate");
  animatedElements.forEach((element) => {
    if (isOnScreen(element)) {
      element.classList.add("animate__animated", "animate__fadeIn");
    }
  });
}

function iOS() {
  if (navigator.userAgentData) {
    navigator.userAgentData.getHighEntropyValues(["platform"]).then((ua) => {
      if (
        ua.platform === "iOS" ||
        ua.platform === "iPadOS" ||
        ua.platform === "MacIntel" ||
        ua.platform === "macOS"
      ) {
        const googleData = document.querySelectorAll(".google-data");
        if (googleData) {
          googleData.forEach((e) => e.remove());
        }
      } else {
        const appleData = document.querySelectorAll(".imap-data");
        if (appleData) {
          appleData.forEach((e) => e.remove());
        }
      }
    });
  } else {
    console.log("User-Agent Client Hints not supported");
  }
}

function setCountDownTimer() {
  if (sessionStorage.isEnvitationShown) return;
  var myModal = new bootstrap.Modal(
    document.getElementById("comming-soon-dialog"),
    { backdrop: true, keyboard: true, focus: true },
  );
  myModal.toggle();

  document.getElementById("close-dialog").addEventListener("click", () => {
    myModal.hide();
  });

  const modal = document.getElementById("comming-soon-dialog");
  modal.addEventListener("hidden.bs.modal", (e) => {
    if (e.target === modal) {
      sessionStorage.isEnvitationShown = true;
      myModal.hide();
    }
  });
}

window.addEventListener("load", () => {
  setCountDownTimer();
  addClassToScheduleFilter();
  addMenuTogglerHandler();
  addAnimationLogic();
  iOS();
});

window.addEventListener("scroll", () => {
  addAnimationLogic();

  if (window.scrollY > 20) {
    const header = document.querySelector(".navbar.fixed-top");
    header.classList.add("fencing-navbar");
  } else if (window.scrollY === 0) {
    const header = document.querySelector(".navbar.fixed-top");
    header.classList.remove("fencing-navbar");
  }
});

window.addEventListener("resize", () => {
  const fencingDevider = document.querySelector(
    ".fencing-section-devider.section-mirror",
  );

  if (fencingDevider) {
    const height = fencingDevider.clientHeight;
    fencingDevider.nextElementSibling.style.marginTop = `-${height}px`;
  }
});
