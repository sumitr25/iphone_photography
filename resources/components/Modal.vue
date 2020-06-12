<script>
  export default {
    name: 'modal',
    data() {
    	return {
        showError : '',
        activeLabel: '',
        customerEmail : '',
        reg: /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm
    		}
    	},
    methods: {
      close() {
        this.$emit('close');
      },
      togglePicker() {
        this.activeLabel = 'active-label';
      },
      removePicker() {
        this.activeLabel = (this.customerEmail.trim()) ? 'active-label' : '';
      },

      checkEmail() { 
        this.showError = (this.reg.test(this.customerEmail)) ? '' : 'error';         
      },

    },
  };
</script>

<template>
  <div class="modalbackdrop">
    <div class="modal">
      <header class="modal__header">
        Step1 of 2
        <button type="button" class="btn-close" @click="close">
          <img src="images/close.png">
        </button>
      </header>
      <section class="modal__body">
        <div class="progressbar">
          <div class="progressbar__progress" style="width: 50%;"> </div>
        </div>
          <h2 class="modal__title"> Enter Your Email To Get <span class="modal__title modal__title--green"> FREE</span> iPhone Photography Email Tips:</h2>
          <div :class="['input-box', showError]">
            <label :class="['text-label', activeLabel]">Enter your email here</label>
            <input type="email" v-model="customerEmail" class="input-field" @focus="togglePicker()"  @blur="removePicker"  @keypress="checkEmail" required>
          </div>
          <button class="btn-send"> Send Me The Tips » </button>
       </section>
    </div>
  </div>
</template>
