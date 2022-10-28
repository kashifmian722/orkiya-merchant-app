import 'controller/products_performance_controller.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';

class ProductsPerformanceScreen
    extends GetWidget<ProductsPerformanceController> {
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
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Container(
                              width: size.width,
                              margin: getMargin(top: 41),
                              child: Padding(
                                  padding: getPadding(left: 25, right: 54),
                                  child: Row(
                                      mainAxisAlignment:
                                          MainAxisAlignment.start,
                                      crossAxisAlignment:
                                          CrossAxisAlignment.center,
                                      mainAxisSize: MainAxisSize.max,
                                      children: [
                                        Padding(
                                            padding:
                                                getPadding(top: 7, bottom: 10),
                                            child: InkWell(
                                                onTap: () {
                                                  onTapImgArrowleft();
                                                },
                                                child: CommonImageView(
                                                    svgPath: ImageConstant
                                                        .imgArrowleft,
                                                    height:
                                                        getVerticalSize(14.00),
                                                    width: getHorizontalSize(
                                                        20.00)))),
                                        Padding(
                                            padding: getPadding(left: 18),
                                            child: Text(
                                                "msg_product_perform".tr,
                                                overflow: TextOverflow.ellipsis,
                                                textAlign: TextAlign.left,
                                                style: AppStyle
                                                    .txtABeeZeeItalic30
                                                    .copyWith(height: 1.00)))
                                      ])))),
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Padding(
                              padding: getPadding(left: 44, top: 33, right: 44),
                              child: Row(
                                  mainAxisAlignment: MainAxisAlignment.start,
                                  crossAxisAlignment: CrossAxisAlignment.center,
                                  mainAxisSize: MainAxisSize.max,
                                  children: [
                                    Text("lbl_from_date".tr,
                                        overflow: TextOverflow.ellipsis,
                                        textAlign: TextAlign.left,
                                        style: AppStyle.txtABeeZeeRegular15
                                            .copyWith(height: 1.00)),
                                    Padding(
                                        padding: getPadding(left: 171),
                                        child: Text("lbl_to_date".tr,
                                            overflow: TextOverflow.ellipsis,
                                            textAlign: TextAlign.left,
                                            style: AppStyle.txtABeeZeeRegular15
                                                .copyWith(height: 1.00)))
                                  ]))),
                      Container(
                          width: double.infinity,
                          margin: getMargin(
                              left: 17, top: 64, right: 17, bottom: 35),
                          decoration: AppDecoration.outlineLightblue90026
                              .copyWith(
                                  borderRadius:
                                      BorderRadiusStyle.roundedBorder20),
                          child: Column(
                              mainAxisSize: MainAxisSize.min,
                              crossAxisAlignment: CrossAxisAlignment.center,
                              mainAxisAlignment: MainAxisAlignment.start,
                              children: [
                                Container(
                                    margin:
                                        getMargin(left: 17, top: 29, right: 17),
                                    decoration: AppDecoration.outlineBlack900
                                        .copyWith(
                                            borderRadius: BorderRadiusStyle
                                                .roundedBorder5),
                                    child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.spaceBetween,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.start,
                                        mainAxisSize: MainAxisSize.max,
                                        children: [
                                          Padding(
                                              padding: getPadding(
                                                  left: 18,
                                                  top: 12,
                                                  bottom: 17),
                                              child: Text("lbl_product_1".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00))),
                                          Padding(
                                              padding: getPadding(
                                                  top: 12,
                                                  right: 66,
                                                  bottom: 17),
                                              child: Text("lbl_27".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00)))
                                        ])),
                                Container(
                                    margin:
                                        getMargin(left: 17, top: 30, right: 17),
                                    decoration: AppDecoration.outlineBlack900
                                        .copyWith(
                                            borderRadius: BorderRadiusStyle
                                                .roundedBorder5),
                                    child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.spaceBetween,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.start,
                                        mainAxisSize: MainAxisSize.max,
                                        children: [
                                          Padding(
                                              padding: getPadding(
                                                  left: 18,
                                                  top: 12,
                                                  bottom: 17),
                                              child: Text("lbl_product_2".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00))),
                                          Padding(
                                              padding: getPadding(
                                                  top: 12,
                                                  right: 66,
                                                  bottom: 17),
                                              child: Text("lbl_33".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00)))
                                        ])),
                                Container(
                                    margin:
                                        getMargin(left: 17, top: 30, right: 17),
                                    decoration: AppDecoration.outlineBlack900
                                        .copyWith(
                                            borderRadius: BorderRadiusStyle
                                                .roundedBorder5),
                                    child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.spaceBetween,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.start,
                                        mainAxisSize: MainAxisSize.max,
                                        children: [
                                          Padding(
                                              padding: getPadding(
                                                  left: 18,
                                                  top: 12,
                                                  bottom: 17),
                                              child: Text("lbl_product_3".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00))),
                                          Padding(
                                              padding: getPadding(
                                                  top: 12,
                                                  right: 66,
                                                  bottom: 17),
                                              child: Text("lbl_10".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00)))
                                        ])),
                                Container(
                                    margin: getMargin(
                                        left: 17,
                                        top: 30,
                                        right: 17,
                                        bottom: 52),
                                    decoration: AppDecoration.outlineBlack900
                                        .copyWith(
                                            borderRadius: BorderRadiusStyle
                                                .roundedBorder5),
                                    child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.spaceBetween,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.start,
                                        mainAxisSize: MainAxisSize.max,
                                        children: [
                                          Padding(
                                              padding: getPadding(
                                                  left: 18,
                                                  top: 12,
                                                  bottom: 17),
                                              child: Text("lbl_product_4".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00))),
                                          Padding(
                                              padding: getPadding(
                                                  top: 12,
                                                  right: 66,
                                                  bottom: 17),
                                              child: Text("lbl_10".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00)))
                                        ]))
                              ]))
                    ])))));
  }

  onTapImgArrowleft() {
    Get.back();
  }
}
