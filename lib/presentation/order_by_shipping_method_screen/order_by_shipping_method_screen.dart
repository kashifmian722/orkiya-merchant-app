import 'controller/order_by_shipping_method_controller.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';

class OrderByShippingMethodScreen
    extends GetWidget<OrderByShippingMethodController> {
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
                        mainAxisAlignment: MainAxisAlignment.start,
                        children: [
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Container(
                              width: size.width,
                              margin: getMargin(top: 41),
                              child: Padding(
                                  padding: getPadding(left: 25, right: 86),
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
                                                "msg_orders_by_shipp".tr,
                                                overflow: TextOverflow.ellipsis,
                                                textAlign: TextAlign.left,
                                                style: AppStyle
                                                    .txtABeeZeeItalic30
                                                    .copyWith(height: 1.00)))
                                      ])))),
                      Padding(
                          padding: getPadding(left: 17, top: 43, right: 17),
                          child: Row(
                              mainAxisAlignment: MainAxisAlignment.spaceBetween,
                              crossAxisAlignment: CrossAxisAlignment.center,
                              mainAxisSize: MainAxisSize.max,
                              children: [
                                Text("lbl_from_date".tr,
                                    overflow: TextOverflow.ellipsis,
                                    textAlign: TextAlign.left,
                                    style: AppStyle.txtABeeZeeRegular15
                                        .copyWith(height: 1.00)),
                                Text("lbl_to_date".tr,
                                    overflow: TextOverflow.ellipsis,
                                    textAlign: TextAlign.left,
                                    style: AppStyle.txtABeeZeeRegular15
                                        .copyWith(height: 1.00))
                              ])),
                      Container(
                          width: double.infinity,
                          margin: getMargin(
                              left: 17, top: 56, right: 17, bottom: 53),
                          decoration: AppDecoration.outlineLightblue90026
                              .copyWith(
                                  borderRadius:
                                      BorderRadiusStyle.roundedBorder20),
                          child: Column(
                              mainAxisSize: MainAxisSize.min,
                              crossAxisAlignment: CrossAxisAlignment.start,
                              mainAxisAlignment: MainAxisAlignment.center,
                              children: [
                                Align(
                                    alignment: Alignment.center,
                                    child: Container(
                                        margin: getMargin(
                                            left: 16, top: 30, right: 16),
                                        decoration: AppDecoration
                                            .outlineBlack900
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
                                                  child: Text("lbl_dine_in".tr,
                                                      overflow:
                                                          TextOverflow.ellipsis,
                                                      textAlign: TextAlign.left,
                                                      style: AppStyle
                                                          .txtABeeZeeRegular15
                                                          .copyWith(
                                                              height: 1.00))),
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
                                                          .copyWith(
                                                              height: 1.00)))
                                            ]))),
                                Align(
                                    alignment: Alignment.center,
                                    child: Container(
                                        margin: getMargin(
                                            left: 16, top: 13, right: 16),
                                        decoration: AppDecoration
                                            .outlineBlack900
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
                                                  child: Text("lbl_delivery".tr,
                                                      overflow:
                                                          TextOverflow.ellipsis,
                                                      textAlign: TextAlign.left,
                                                      style: AppStyle
                                                          .txtABeeZeeRegular15
                                                          .copyWith(
                                                              height: 1.00))),
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
                                                          .copyWith(
                                                              height: 1.00)))
                                            ]))),
                                Align(
                                    alignment: Alignment.center,
                                    child: Container(
                                        margin: getMargin(
                                            left: 16, top: 21, right: 16),
                                        decoration: AppDecoration
                                            .outlineBlack900
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
                                                      bottom: 16),
                                                  child: Text("lbl_car_hop".tr,
                                                      overflow:
                                                          TextOverflow.ellipsis,
                                                      textAlign: TextAlign.left,
                                                      style: AppStyle
                                                          .txtABeeZeeRegular15
                                                          .copyWith(
                                                              height: 1.00))),
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
                                                          .copyWith(
                                                              height: 1.00)))
                                            ]))),
                                Container(
                                    margin: getMargin(
                                        left: 16,
                                        top: 21,
                                        right: 16,
                                        bottom: 31),
                                    decoration: AppDecoration.outlineBlack900
                                        .copyWith(
                                            borderRadius: BorderRadiusStyle
                                                .roundedBorder5),
                                    child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.start,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.start,
                                        mainAxisSize: MainAxisSize.max,
                                        children: [
                                          Padding(
                                              padding: getPadding(
                                                  left: 18,
                                                  top: 12,
                                                  bottom: 17),
                                              child: Text("lbl_food_panda".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00))),
                                          Padding(
                                              padding: getPadding(
                                                  left: 143,
                                                  top: 12,
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
