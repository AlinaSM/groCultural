<script src="{{ asset('js/aframe.min.js') }}"></script>

<a-scene>
    <a-assets>
      <a-asset-item id="tree-obj" src="{{ asset('modelos/lol.obj') }}"></a-asset-item>
      <a-asset-item id="tree-mtl" src="{{ asset('modelos/lol.mtl') }}"></a-asset-item>
    </a-assets>
  
    <a-entity id="modeloEscenario" rotation="0.09 0 -0.07" position="-3.22 0 -15.39" scale="0.5 0.5 0.5" obj-model="obj: #tree-obj; mtl: #tree-mtl"></a-entity>
    <a-entity id="rig" position="25 10 0">
      <a-camera id="camera" position= "-1.6346310908813886 -9 -6.997840382521358" rotation= "0 46.409581405596704 0" camera look-controls wasd-controls acceleration= "150"></a-camera>
    </a-entity>y
</a-scene>
