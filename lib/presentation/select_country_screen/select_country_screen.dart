import 'controller/select_country_controller.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';
import 'package:merchant_app/widgets/custom_button.dart';

class SelectCountryScreen extends GetWidget<SelectCountryController> {
  @override
  Widget build(BuildContext context) {
    return SafeArea(
        child: Scaffold(
            backgroundColor: ColorConstant.yellow100,
            body: Container(
                width: size.width,
                child: SingleChildScrollView(
                    child: Column(
                        mainAxisSize: MainAxisSize.min,
                        crossAxisAlignment: CrossAxisAlignment.center,
                        mainAxisAlignment: MainAxisAlignment.end,
                        children: [
                      Container(
                          height: getVerticalSize(334.00),
                          width: getHorizontalSize(407.00),
                          margin: getMargin(left: 4),
                          child: Stack(alignment: Alignment.topLeft, children: [
                            Align(
                                alignment: Alignment.bottomCenter,
                                child: Padding(
                                    padding: getPadding(
                                        left: 85, top: 10, right: 85),
                                    child: CommonImageView(
                                        svgPath: ImageConstant.imgOrkiyalogosvg,
                                        height: getVerticalSize(86.00),
                                        width: getHorizontalSize(231.00)))),
                            Align(
                                alignment: Alignment.topLeft,
                                child: Padding(
                                    padding: getPadding(bottom: 10),
                                    child: Column(
                                        mainAxisSize: MainAxisSize.min,
                                        mainAxisAlignment:
                                            MainAxisAlignment.start,
                                        children: [
                                          Align(
                                              alignment: Alignment.centerLeft,
                                              child: Padding(
                                                  padding:
                                                      getPadding(right: 10),
                                                  child: CommonImageView(
                                                      imagePath: ImageConstant
                                                          .imgContrastBlue100,
                                                      height: getVerticalSize(
                                                          35.00),
                                                      width: getHorizontalSize(
                                                          79.00)))),
                                          Align(
                                              alignment: Alignment.centerRight,
                                              child: Padding(
                                                  padding: getPadding(
                                                      left: 10,
                                                      top: 211,
                                                      bottom: 1),
                                                  child: CommonImageView(
                                                      svgPath:
                                                          ImageConstant.imgEye,
                                                      height: getVerticalSize(
                                                          25.00),
                                                      width: getHorizontalSize(
                                                          40.00))))
                                        ])))
                          ])),
                      CustomButton(
                          width: 361,
                          text: "lbl_chalen".tr,
                          margin: getMargin(left: 31, top: 96, right: 19),
                          onTap: onTapBtnChalen),
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Padding(
                              padding:
                                  getPadding(left: 32, top: 160, right: 32),
                              child: Row(
                                  mainAxisAlignment: MainAxisAlignment.start,
                                  crossAxisAlignment: CrossAxisAlignment.start,
                                  mainAxisSize: MainAxisSize.max,
                                  children: [
                                    Container(
                                        height: getVerticalSize(153.00),
                                        width: getHorizontalSize(189.00),
                                        margin: getMargin(top: 6),
                                        child: Stack(
                                            alignment: Alignment.topRight,
                                            children: [
                                              Align(
                                                  alignment:
                                                      Alignment.centerLeft,
                                                  child: Container(
                                                      height: getSize(153.00),
                                                      width: getSize(153.00),
                                                      margin:
                                                          getMargin(right: 10),
                                                      decoration: BoxDecoration(
                                                          color: ColorConstant
                                                              .lightGreen100,
                                                          borderRadius:
                                                              BorderRadius.circular(
                                                                  getHorizontalSize(
                                                                      76.50))))),
                                              Align(
                                                  alignment: Alignment.topRight,
                                                  child: Container(
                                                      height: getSize(72.00),
                                                      width: getSize(72.00),
                                                      margin: getMargin(
                                                          left: 10,
                                                          top: 30,
                                                          bottom: 30),
                                                      decoration: BoxDecoration(
                                                          color: ColorConstant
                                                              .red100,
                                                          borderRadius:
                                                              BorderRadius.circular(
                                                                  getHorizontalSize(
                                                                      36.00)))))
                                            ])),
                                    Container(
                                        height: getSize(25.00),
                                        width: getSize(25.00),
                                        margin:
                                            getMargin(left: 88, bottom: 134),
                                        decoration: BoxDecoration(
                                            color: ColorConstant.indigoA400,
                                            borderRadius: BorderRadius.circular(
                                                getHorizontalSize(12.50))))
                                  ])))
                    ])))));
  }

  onTapBtnChalen() {
    Get.toNamed(AppRoutes.loginPageScreen);
  }
}
