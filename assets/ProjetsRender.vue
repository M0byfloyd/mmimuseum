<template>
  <section>
    <article v-for="result in results">
      <header>
        <h2>{{ result.projIntTitre}}</h2>

      </header>
      <main>
        <p>{{ result.projIntDesc}}</p>

        {{ result}}
        <a v-bind:href="result.projIntUrl" >Consulter le projet</a>
      </main>
    </article>
  </section>
</template>

<script>
import ApiController from './api';
import axios from "axios";

export default {
  data() {
    return {
      name: "ArticlesVue",
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