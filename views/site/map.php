<?php


?>
<style>
 

  /* SIDEBAR */
  .sidebar_map {
    flex-basis: 40rem;
    background-color: #ececec;
    padding: 2rem 2rem 4rem 2rem;
    display: flex;
    flex-direction: column;
  }


.map_container{
  display: flex;
  margin-top:30px;
  width: 100%;
}
  .workouts {
    list-style: none;
    height: 77vh;
    overflow-y: scroll;
    overflow-x: hidden;
  }

  .workouts::-webkit-scrollbar {
    width: 0;
  }

  .workout {
    background-color: var(--color-dark--2);
    border-radius: 5px;
    padding: 1.5rem 2.25rem;
    margin-bottom: 1.75rem;
    cursor: pointer;

    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 0.75rem 1.5rem;
  }

  .workout--running {
    border-left: 5px solid var(--color-brand--2);
  }

  .workout--cycling {
    border-left: 5px solid var(--color-brand--1);
  }

  .workout__title {
    font-size: 1.7rem;
    font-weight: 600;
    grid-column: 1 / -1;
  }

  .workout__details {
    display: flex;
    align-items: baseline;
  }

  .workout__icon {
    font-size: 1.8rem;
    margin-right: 0.2rem;
    height: 0.28rem;
  }

  .workout__value {
    font-size: 1.5rem;
    margin-right: 0.5rem;
  }

  .workout__unit {
    font-size: 1.1rem;
    color: var(--color-light--1);
    text-transform: uppercase;
    font-weight: 800;
  }

  .form {
    background-color:#42484d;
    border-radius: 5px;
    padding: 1.5rem 2.75rem;
    margin-bottom: 1.75rem;

    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.5rem 2.5rem;

    /* Match height and activity boxes */
    height: 9.25rem;
    transition: all 0.5s, transform 1ms;
  }

  .form.hidden {
    transform: translateY(-30rem);
    height: 0;
    padding: 0 2.25rem;
    margin-bottom: 0;
    opacity: 0;
  }

  .form__row {
    display: flex;
    align-items: center;
  }

  .form__row--hidden {
    display: none;
  }

  .form__label {
    flex: 0 0 50%;
    font-size: 1.5rem;
    font-weight: 600;
    color: #ececec;
  }

  .form__input {
    width: 100%;
    padding: 0.3rem 1.1rem;
    font-family: inherit;
    font-size: 1.4rem;
    border: none;
    border-radius: 3px;
    background-color: rgb(214, 222, 224);
    transition: all 0.2s;
  }

  .form__input:focus {
    outline: none;
    background-color: #fff;
  }

  .form__btn {
    display: none;
  }

  .copyright {
    margin-top: auto;
    font-size: 1.3rem;
    text-align: center;
    color: var(--color-light--1);
  }

  .twitter-link:link,
  .twitter-link:visited {
    color: var(--color-light--1);
    transition: all 0.2s;
  }

  .twitter-link:hover,
  .twitter-link:active {
    color: var(--color-light--2);
  }

  /* MAP */
  #map {
    flex: 1;
    /*height: 100%;*/
    background-color: #ddd;
    z-index: 0;
    
  }

  /* Popup width is defined in JS using options */
  .leaflet-popup .leaflet-popup-content-wrapper {
    background-color: var(--color-dark--1);
    color: var(--color-light--2);
    border-radius: 5px;
    padding-right: 0.6rem;
  }

  .leaflet-popup .leaflet-popup-content {
    font-size: 1.5rem;
  }

  .leaflet-popup .leaflet-popup-tip {
    background-color: var(--color-dark--1);
  }

  .running-popup .leaflet-popup-content-wrapper {
    border-left: 5px solid var(--color-brand--2);
  }

  .cycling-popup .leaflet-popup-content-wrapper {
    border-left: 5px solid var(--color-brand--1);
  }
  .sidebar_title{
    text-align: center;
  }
</style>
<div class="map_container">
  

  <div id="map"></div>
  <div class="sidebar_map">
    <h3 class="sidebar_title">Места в Тайште</h3>

    <ul class="workouts">
      <form class="form hidden">
        <div class="form__row">
          <label class="form__label">Type</label>
          <select class="form__input form__input--type">
            <option value="running">Running</option>
            <option value="cycling">Cycling</option>
          </select>
        </div>
        <div class="form__row">
          <label class="form__label">Distance</label>
          <input class="form__input form__input--distance" placeholder="km" />
        </div>
        <div class="form__row">
          <label class="form__label">Duration</label>
          <input class="form__input form__input--duration" placeholder="min" />
        </div>

        <div class="form__row">
          <label class="form__label">Cadence</label>
          <input class="form__input form__input--cadence" placeholder="step/min" />
        </div>
        <div class="form__row form__row--hidden">
          <label class="form__label">Elev Gain</label>
          <input class="form__input form__input--elevation" placeholder="meters" />
        </div>
        <button class="form__btn">OK</button>
      </form>

      <!--<li class="workout workout--running" data-id="1234567890">
        <h2 class="workout__title">Running on April 14</h2>
        <div class="workout__details">
          <span class="workout__icon">🏃‍♂️</span>
          <span class="workout__value">5.2</span>
          <span class="workout__unit">km</span>
        </div>
        <div class="workout__details">
          <span class="workout__icon">⏱</span>
          <span class="workout__value">24</span>
          <span class="workout__unit">min</span>
        </div>
        <div class="workout__details">
          <span class="workout__icon">⚡️</span>
          <span class="workout__value">4.6</span>
          <span class="workout__unit">min/km</span>
        </div>
        <div class="workout__details">
          <span class="workout__icon">🦶🏼</span>
          <span class="workout__value">178</span>
          <span class="workout__unit">spm</span>
        </div>
      </li>

      <li class="workout workout--cycling" data-id="1234567891">
        <h2 class="workout__title">Cycling on April 5</h2>
        <div class="workout__details">
          <span class="workout__icon">🚴‍♀️</span>
          <span class="workout__value">27</span>
          <span class="workout__unit">km</span>
        </div>
        <div class="workout__details">
          <span class="workout__icon">⏱</span>
          <span class="workout__value">95</span>
          <span class="workout__unit">min</span>
        </div>
        <div class="workout__details">
          <span class="workout__icon">⚡️</span>
          <span class="workout__value">16</span>
          <span class="workout__unit">km/h</span>
        </div>
        <div class="workout__details">
          <span class="workout__icon">⛰</span>
          <span class="workout__value">223</span>
          <span class="workout__unit">m</span>
        </div>
      </li>-->
    </ul>

    <p class="copyright">
      &copy; Copyright by
      <a class="twitter-link" target="_blank" href="https://twitter.com/jonasschmedtman">Jonas Schmedtmann</a>. Use for learning or your portfolio. Don't use to teach. Don't claim
      as your own.
    </p>
  </div>
</div>
<script type="text/javascript">
  'use strict';

  class Workout {
    date = new Date();
    id = (Date.now() + '').slice(-10);
    clicks = 0;

    constructor(coords, distance, duration) {
      // this.date = ...
      // this.id = ...
      this.coords = coords; // [lat, lng]
      this.distance = distance; // in km
      this.duration = duration; // in min
    }

    _setDescription() {
      // prettier-ignore
      const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

      this.description = `${this.type[0].toUpperCase()}${this.type.slice(1)} on ${
      months[this.date.getMonth()]
    } ${this.date.getDate()}`;
    }

    click() {
      this.clicks++;
    }
  }

  class Running extends Workout {
    type = 'running';

    constructor(coords, distance, duration, cadence) {
      super(coords, distance, duration);
      this.cadence = cadence;
      this.calcPace();
      this._setDescription();
    }

    calcPace() {
      // min/km
      this.pace = this.duration / this.distance;
      return this.pace;
    }
  }

  class Cycling extends Workout {
    type = 'cycling';

    constructor(coords, distance, duration, elevationGain) {
      super(coords, distance, duration);
      this.elevationGain = elevationGain;
      // this.type = 'cycling';
      this.calcSpeed();
      this._setDescription();
    }

    calcSpeed() {
      // km/h
      this.speed = this.distance / (this.duration / 60);
      return this.speed;
    }
  }

  // const run1 = new Running([39, -12], 5.2, 24, 178);
  // const cycling1 = new Cycling([39, -12], 27, 95, 523);
  // console.log(run1, cycling1);

  ///////////////////////////////////////
  // APPLICATION ARCHITECTURE
  const form = document.querySelector('.form');
  const containerWorkouts = document.querySelector('.workouts');
  const inputType = document.querySelector('.form__input--type');
  const inputDistance = document.querySelector('.form__input--distance');
  const inputDuration = document.querySelector('.form__input--duration');
  const inputCadence = document.querySelector('.form__input--cadence');
  const inputElevation = document.querySelector('.form__input--elevation');

  class App {
    #map;
    #mapZoomLevel = 13;
    #mapEvent;
    #workouts = [];

    constructor() {
      // Get user's position
      this._getPosition();

      // Get data from local storage
      this._getLocalStorage();

      // Attach event handlers
      form.addEventListener('submit', this._newWorkout.bind(this));
      inputType.addEventListener('change', this._toggleElevationField);
      containerWorkouts.addEventListener('click', this._moveToPopup.bind(this));
    }

    _getPosition() {
      if (navigator.geolocation)
        navigator.geolocation.getCurrentPosition(
          this._loadMap.bind(this),
          function() {
            alert('Could not get your position');
          }
        );
    }

    _loadMap(position) {
      const {
        latitude
      } = position.coords;
      const {
        longitude
      } = position.coords;
      // console.log(`https://www.google.pt/maps/@${latitude},${longitude}`);

      const coords = [latitude, longitude];

      this.#map = L.map('map').setView(coords, this.#mapZoomLevel);

      L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      }).addTo(this.#map);

      // Handling clicks on map
      this.#map.on('click', this._showForm.bind(this));

      this.#workouts.forEach(work => {
        this._renderWorkoutMarker(work);
      });
    }

    _showForm(mapE) {
      this.#mapEvent = mapE;
      form.classList.remove('hidden');
      inputDistance.focus();
    }

    _hideForm() {
      // Empty inputs
      inputDistance.value = inputDuration.value = inputCadence.value = inputElevation.value =
        '';

      form.style.display = 'none';
      form.classList.add('hidden');
      setTimeout(() => (form.style.display = 'grid'), 1000);
    }

    _toggleElevationField() {
      inputElevation.closest('.form__row').classList.toggle('form__row--hidden');
      inputCadence.closest('.form__row').classList.toggle('form__row--hidden');
    }

    _newWorkout(e) {
      const validInputs = (...inputs) =>
        inputs.every(inp => Number.isFinite(inp));
      const allPositive = (...inputs) => inputs.every(inp => inp > 0);

      e.preventDefault();

      // Get data from form
      const type = inputType.value;
      const distance = +inputDistance.value;
      const duration = +inputDuration.value;
      const {
        lat,
        lng
      } = this.#mapEvent.latlng;
      let workout;

      // If workout running, create running object
      if (type === 'running') {
        const cadence = +inputCadence.value;

        // Check if data is valid
        if (
          // !Number.isFinite(distance) ||
          // !Number.isFinite(duration) ||
          // !Number.isFinite(cadence)
          !validInputs(distance, duration, cadence) ||
          !allPositive(distance, duration, cadence)
        )
          return alert('Inputs have to be positive numbers!');

        workout = new Running([lat, lng], distance, duration, cadence);
      }

      // If workout cycling, create cycling object
      if (type === 'cycling') {
        const elevation = +inputElevation.value;

        if (
          !validInputs(distance, duration, elevation) ||
          !allPositive(distance, duration)
        )
          return alert('Inputs have to be positive numbers!');

        workout = new Cycling([lat, lng], distance, duration, elevation);
      }

      // Add new object to workout array
      this.#workouts.push(workout);

      // Render workout on map as marker
      this._renderWorkoutMarker(workout);

      // Render workout on list
      this._renderWorkout(workout);

      // Hide form + clear input fields
      this._hideForm();

      // Set local storage to all workouts
      this._setLocalStorage();
    }

    _renderWorkoutMarker(workout) {
      L.marker(workout.coords)
        .addTo(this.#map)
        .bindPopup(
          L.popup({
            maxWidth: 250,
            minWidth: 100,
            autoClose: false,
            closeOnClick: false,
            className: `${workout.type}-popup`,
          })
        )
        .setPopupContent(
          `${workout.type === 'running' ? '🏃‍♂️' : '🚴‍♀️'} ${workout.description}`
        )
        .openPopup();
    }

    _renderWorkout(workout) {
      let html = `
      <li class="workout workout--${workout.type}" data-id="${workout.id}">
        <h2 class="workout__title">${workout.description}</h2>
        <div class="workout__details">
          <span class="workout__icon">${
            workout.type === 'running' ? '🏃‍♂️' : '🚴‍♀️'
          }</span>
          <span class="workout__value">${workout.distance}</span>
          <span class="workout__unit">km</span>
        </div>
        <div class="workout__details">
          <span class="workout__icon">⏱</span>
          <span class="workout__value">${workout.duration}</span>
          <span class="workout__unit">min</span>
        </div>
    `;

      if (workout.type === 'running')
        html += `
        <div class="workout__details">
          <span class="workout__icon">⚡️</span>
          <span class="workout__value">${workout.pace.toFixed(1)}</span>
          <span class="workout__unit">min/km</span>
        </div>
        <div class="workout__details">
          <span class="workout__icon">🦶🏼</span>
          <span class="workout__value">${workout.cadence}</span>
          <span class="workout__unit">spm</span>
        </div>
      </li>
      `;

      if (workout.type === 'cycling')
        html += `
        <div class="workout__details">
          <span class="workout__icon">⚡️</span>
          <span class="workout__value">${workout.speed.toFixed(1)}</span>
          <span class="workout__unit">km/h</span>
        </div>
        <div class="workout__details">
          <span class="workout__icon">⛰</span>
          <span class="workout__value">${workout.elevationGain}</span>
          <span class="workout__unit">m</span>
        </div>
      </li>
      `;

      form.insertAdjacentHTML('afterend', html);
    }

    _moveToPopup(e) {
      // BUGFIX: When we click on a workout before the map has loaded, we get an error. But there is an easy fix:
      if (!this.#map) return;

      const workoutEl = e.target.closest('.workout');

      if (!workoutEl) return;

      const workout = this.#workouts.find(
        work => work.id === workoutEl.dataset.id
      );

      this.#map.setView(workout.coords, this.#mapZoomLevel, {
        animate: true,
        pan: {
          duration: 1,
        },
      });

      // using the public interface
      // workout.click();
    }

    _setLocalStorage() {
      localStorage.setItem('workouts', JSON.stringify(this.#workouts));
    }

    _getLocalStorage() {
      const data = JSON.parse(localStorage.getItem('workouts'));

      if (!data) return;

      this.#workouts = data;

      this.#workouts.forEach(work => {
        this._renderWorkout(work);
      });
    }

    reset() {
      localStorage.removeItem('workouts');
      location.reload();
    }
  }

  const app = new App();
</script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXvGcCzaPHIR9n-4TiIGk84JQzfP1bMDU&callback=initMap" async defer></script>-->