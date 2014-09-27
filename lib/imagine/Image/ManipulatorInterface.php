<?php
 namespace Imagine\Image; use Imagine\Exception\OutOfBoundsException; use Imagine\Exception\RuntimeException; use Imagine\Image\BoxInterface; use Imagine\Image\Color; use Imagine\Image\ImageInterface; use Imagine\Image\PointInterface; use Imagine\Image\Fill\FillInterface; interface ManipulatorInterface { const THUMBNAIL_INSET = 'inset'; const THUMBNAIL_OUTBOUND = 'outbound'; public function copy(); public function crop(PointInterface $start, BoxInterface $size); public function resize(BoxInterface $size); public function rotate($angle, Color $background = null); public function paste(ImageInterface $image, PointInterface $start); public function save($path, array $options = array()); public function show($format, array $options = array()); public function flipHorizontally(); public function flipVertically(); public function strip(); public function thumbnail(BoxInterface $size, $mode = self::THUMBNAIL_INSET); public function applyMask(ImageInterface $mask); public function fill(FillInterface $fill); } 