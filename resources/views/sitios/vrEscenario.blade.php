

<script src="{{ asset('js/aframe.min.js') }}"></script>

<a-scene>
    <a-assets>
      <a-asset-item id="tree-obj" src="{{ asset('modelos/objeto.obj') }}"></a-asset-item>
      <a-asset-item id="tree-mtl" src="{{ asset('modelos/objeto.mtl') }}"></a-asset-item>
    </a-assets>
  
    <a-entity id="modeloEscenario" rotation="0.09 0 -0.07" position="-3.22 0 -15.39" scale="3 3 3" obj-model="obj: #tree-obj; mtl: #tree-mtl"></a-entity>
</a-scene>
