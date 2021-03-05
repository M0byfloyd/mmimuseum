<template>
  <section>

  </section>
</template>

<script>
import ApiController from './api';
import axios from "axios";

export default {
  data() {
    return {
      name: "ArticlesNew",
      results : null
    }
  },
  mounted() {
    axios
        .get(ApiController.urlApi +'/project_interfaces')
        .then(response => (this.results = response.data['hydra:member']))
  },
};

</script>