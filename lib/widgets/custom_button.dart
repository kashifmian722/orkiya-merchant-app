import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';

class CustomButton extends StatelessWidget {
  CustomButton(
      {this.shape,
      this.padding,
      this.variant,
      this.fontStyle,
      this.alignment,
      this.onTap,
      this.width,
      this.margin,
      this.prefixWidget,
      this.suffixWidget,
      this.text});

  ButtonShape? shape;

  ButtonPadding? padding;

  ButtonVariant? variant;

  ButtonFontStyle? fontStyle;

  Alignment? alignment;

  VoidCallback? onTap;

  double? width;

  EdgeInsetsGeometry? margin;

  Widget? prefixWidget;

  Widget? suffixWidget;

  String? text;

  @override
  Widget build(BuildContext context) {
    return alignment != null
        ? Align(
            alignment: alignment ?? Alignment.center,
            child: _buildButtonWidget(),
          )
        : _buildButtonWidget();
  }

  _buildButtonWidget() {
    return GestureDetector(
      onTap: onTap,
      child: Container(
        width: getHorizontalSize(width ?? 0),
        margin: margin,
        padding: _setPadding(),
        decoration: _buildDecoration(),
        child: Row(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            prefixWidget ?? SizedBox(),
            Text(
              text ?? "",
              textAlign: TextAlign.center,
              style: _setFontStyle(),
            ),
            suffixWidget ?? SizedBox(),
          ],
        ),
      ),
    );
  }

  _buildDecoration() {
    return BoxDecoration(
      color: _setColor(),
      border: _setBorder(),
      borderRadius: _setBorderRadius(),
    );
  }

  _setPadding() {
    switch (padding) {
      case ButtonPadding.PaddingAll7:
        return getPadding(
          all: 7,
        );
      default:
        return getPadding(
          all: 15,
        );
    }
  }

  _setColor() {
    switch (variant) {
      case ButtonVariant.FillGray100:
        return ColorConstant.gray100;
      case ButtonVariant.OutlineBlack900_1:
        return ColorConstant.teal900;
      case ButtonVariant.OutlineBlack900:
        return null;
      default:
        return ColorConstant.teal900;
    }
  }

  _setBorder() {
    switch (variant) {
      case ButtonVariant.OutlineBlack900:
        return Border.all(
          color: ColorConstant.black900,
          width: getHorizontalSize(
            1.00,
          ),
        );
      case ButtonVariant.OutlineBlack900_1:
        return Border.all(
          color: ColorConstant.black900,
          width: getHorizontalSize(
            1.00,
          ),
        );
      case ButtonVariant.FillTeal900:
      case ButtonVariant.FillGray100:
        return null;
      default:
        return null;
    }
  }

  _setBorderRadius() {
    switch (shape) {
      case ButtonShape.Square:
        return BorderRadius.circular(0);
      default:
        return BorderRadius.circular(
          getHorizontalSize(
            5.00,
          ),
        );
    }
  }

  _setFontStyle() {
    switch (fontStyle) {
      case ButtonFontStyle.ABeeZeeRegular9:
        return TextStyle(
          color: ColorConstant.black901,
          fontSize: getFontSize(
            9,
          ),
          fontFamily: 'ABeeZee',
          fontWeight: FontWeight.w400,
        );
      case ButtonFontStyle.ABeeZeeRegular15:
        return TextStyle(
          color: ColorConstant.black900,
          fontSize: getFontSize(
            15,
          ),
          fontFamily: 'ABeeZee',
          fontWeight: FontWeight.w400,
        );
      default:
        return TextStyle(
          color: ColorConstant.whiteA700,
          fontSize: getFontSize(
            18,
          ),
          fontFamily: 'ABeeZee',
          fontWeight: FontWeight.w400,
        );
    }
  }
}

enum ButtonShape {
  Square,
  RoundedBorder5,
}

enum ButtonPadding {
  PaddingAll15,
  PaddingAll7,
}

enum ButtonVariant {
  FillTeal900,
  FillGray100,
  OutlineBlack900,
  OutlineBlack900_1,
}

enum ButtonFontStyle {
  ABeeZeeRegular18,
  ABeeZeeRegular9,
  ABeeZeeRegular15,
}
