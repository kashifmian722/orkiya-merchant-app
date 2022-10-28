import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';

class AppDecoration {
  static BoxDecoration get txtOutlineLightblue90026 => BoxDecoration(
        color: ColorConstant.whiteA700,
        boxShadow: [
          BoxShadow(
            color: ColorConstant.lightBlue90026,
            spreadRadius: getHorizontalSize(
              2.00,
            ),
            blurRadius: getHorizontalSize(
              2.00,
            ),
            offset: Offset(
              0,
              15,
            ),
          ),
        ],
      );
  static BoxDecoration get fillYellow100 => BoxDecoration(
        color: ColorConstant.yellow100,
      );
  static BoxDecoration get fillLightgreen100 => BoxDecoration(
        color: ColorConstant.lightGreen100,
      );
  static BoxDecoration get outlineBlack900 => BoxDecoration(
        border: Border.all(
          color: ColorConstant.black900,
          width: getHorizontalSize(
            1.00,
          ),
        ),
      );
  static BoxDecoration get fillBluegray900a2 => BoxDecoration(
        color: ColorConstant.bluegray900A2,
      );
  static BoxDecoration get fillWhiteA700 => BoxDecoration(
        color: ColorConstant.whiteA700,
      );
  static BoxDecoration get outlineLightblue90026 => BoxDecoration(
        color: ColorConstant.whiteA700,
        boxShadow: [
          BoxShadow(
            color: ColorConstant.lightBlue90026,
            spreadRadius: getHorizontalSize(
              2.00,
            ),
            blurRadius: getHorizontalSize(
              2.00,
            ),
            offset: Offset(
              0,
              15,
            ),
          ),
        ],
      );
}

class BorderRadiusStyle {
  static BorderRadius roundedBorder5 = BorderRadius.circular(
    getHorizontalSize(
      5.00,
    ),
  );

  static BorderRadius roundedBorder20 = BorderRadius.circular(
    getHorizontalSize(
      20.00,
    ),
  );

  static BorderRadius txtCircleBorder11 = BorderRadius.circular(
    getHorizontalSize(
      11.00,
    ),
  );
}
