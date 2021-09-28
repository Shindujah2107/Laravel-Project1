<template>
  <div>
    <div class="card">
      <div class="card-header">Find Doctors</div>
      <div class="card-body">
        <datepicker
          class="my-datepicker"
          calendar-class="my-datepicker_calendar"
          :disabledDates="disabledDates"
          :format="customDate"
          v-model="time"
          :inline="true"
        ></datepicker>
      </div>

      <div class="card mt-5">
        <div class="card-header">Doctors</div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Name</th>
               <th>Vaccine type</th>
                <th>Booking</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(d, index) in doctors" v-if="!loading">
                <th scope="row">{{ index + 1 }}</th>
                <td>
                  <img :src="'/images/' + d.doctor.image" width="80" />
                </td>
                <td>{{ d.doctor.name }}</td>
                <td>{{ d.doctor.vaccine }}</td>
                <td>
                  <a :href="'/new-appointment/' + d.user_id + '/' + d.date"
                    ><button class="btn btn-success">
                      Book Appointment
                    </button></a
                  >
                </td>
              </tr>
              <td v-if="doctors.length == 0">
                No doctors available for {{ this.time }}
              </td>
            </tbody>
          </table>
          <div class="text-center">
            <pulse-loader
              :loading="loading"
              :color="color"
              :size="size"
            ></pulse-loader>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script type="text/javascript">
import datepicker from "vuejs-datepicker";
import moment from "moment";
import PulseLoader from "vue-spinner/src/PulseLoader.vue";
export default {
  data() {
    return {
      time: "",
      doctors: [],
      loading: false,
      disabledDates: {
        to: new Date(Date.now() - 86400000),
      },
    };
  },
  components: {
    datepicker,
    PulseLoader,
  },
  methods: {
    customDate(date) {
      this.loading = true;

      this.time = moment(date).format("YYYY-MM-DD");
      axios
        .post("/api/finddoctors", { date: this.time })
        .then((response) => {
          setTimeout(() => {
            this.doctors = response.data;
            this.loading = false;
          }, 1000);
        })
        .catch((error) => {
          alert("error");
        });
    },
  },
  mounted() {
    //let time = moment(date).parseZone("Australia/Melbourne");
    this.loading = true;
    axios.get("/api/doctors/today").then((response) => {
      this.doctors = response.data;
      this.loading = false;
    });
  },
};
</script>
<style scoped>
.my-datepicker >>> .my-datepicker_calendar {
  width: 100%;
  height: 330px;
  font-weight: bold;
  color: #ff4d4d;
}
.card-header {
  color: #001a00;
}
</style>