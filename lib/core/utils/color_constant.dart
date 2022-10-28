import 'dart:ui';
import 'package:flutter/material.dart';

class ColorConstant {
  static Color gray600 = fromHex('#707070');

  static Color black9007e = fromHex('#7e000000');

  static Color lightBlue90026 = fromHex('#260a568d');

  static Color lightGreen100 = fromHex('#d3f9ca');

  static Color orange400 = fromHex('#ff9e1f');

  static Color red100 = fromHex('#ffd2cc');

  static Color gray100 = fromHex('#f4f8f8');

  static Color black900 = fromHex('#000000');

  static Color indigoA700 = fromHex('#0a20e4');

  static Color bluegray900A2 = fromHex('#a2303030');

  static Color bluegray400 = fromHex('#888888');

  static Color teal900 = fromHex('#054240');

  static Color indigoA400 = fromHex('#435eff');

  static Color black901 = fromHex('#0a0a0a');

  static Color whiteA700 = fromHex('#ffffff');

  static Color yellow100 = fromHex('#ffefcc');

  static Color fromHex(String hexString) {
    final buffer = StringBuffer();
    if (hexString.length == 6 || hexString.length == 7) buffer.write('ff');
    buffer.write(hexString.replaceFirst('#', ''));
    return Color(int.parse(buffer.toString(), radix: 16));
  }
}
