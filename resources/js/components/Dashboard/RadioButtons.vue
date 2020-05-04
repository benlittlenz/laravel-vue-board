<template>
  <div class="min-h-screen">
    <div class="w-custom mx-auto pt-8 pb-6 md:flex justify-between items-end border-b-2 border-gray-600">
      <div class="text-2xl text-blue-800">
        Change Plan
      </div>
      <div>
        <a
          href="#"
          class="no-underline text-blue-800 hover:underline"
        >Cancel you plan</a>
      </div>
    </div>
    <div class="w-custom mx-auto py-8 flex justify-between flex-wrap">
      <PlanButtons 
        name="Small"
        users="1-5"
        cost="25"
        :active="activePlan"
        @onUpdatePlan="updateActivePlan"
      />
      <PlanButtons 
        name="Medium"
        users="5-15"
        cost="25"
        :active="activePlan"
        @onUpdatePlan="updateActivePlan"
      />
      <PlanButtons 
        name="Large"
        users="15-30"
        cost="40"
        :active="activePlan"
        @onUpdatePlan="updateActivePlan"
      />
    </div>
    <input
      id="one"
      v-model="picked"
      type="radio"
      value="One"
    >
    <label for="one">One</label>
    <br>
    <input
      id="two"
      v-model="picked"
      type="radio"
      value="Two"
    >
    <label for="two">Two</label>
    <br>
    <span>Picked: {{ picked }}</span>
  </div>
</template>

<script>
import PlanButtons from './PlanButtons'
export default {
    components: {
        PlanButtons
    },
    data() {
        return {
            picked: '',
            activePlan: '',

        }
    },
    
    methods: {
        updateActivePlan(plan) {
            this.activePlan = plan
        }
    }
}
</script>