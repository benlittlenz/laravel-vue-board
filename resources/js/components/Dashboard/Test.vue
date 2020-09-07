<template>
  <div>
    <editor
      class="bg-white h-screen"
      autofocus
      holder-id="codex-editor"
      save-button-id="save-button"
      :init-data="initData"
      @save="save"
      @ready="onReady"
      @change="onChange"
    />
  </div>
</template>

<script>


export default {
    //const editor = new EditorJS();
}
</script>