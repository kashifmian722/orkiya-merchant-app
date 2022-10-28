import '../order_screen/widgets/order_item_widget.dart';
import 'controller/order_controller.dart';
import 'models/order_item_model.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';
import 'package:merchant_app/widgets/custom_button.dart';
import 'package:merchant_app/widgets/custom_icon_button.dart';

class OrderScreen extends GetWidget<OrderController> {
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
                              margin: getMargin(top: 36),
                              child: Padding(
                                  padding: getPadding(left: 25, right: 17),
                                  child: Row(
                                      mainAxisAlignment:
                                          MainAxisAlignment.start,
                                      crossAxisAlignment:
                                          CrossAxisAlignment.center,
                                      mainAxisSize: MainAxisSize.max,
                                      children: [
                                        Padding(
                                            padding:
                                                getPadding(top: 12, bottom: 13),
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
                                            padding: getPadding(
                                                left: 18, top: 5, bottom: 5),
                                            child: Text("lbl_order_10007".tr,
                                                overflow: TextOverflow.ellipsis,
                                                textAlign: TextAlign.left,
                                                style: AppStyle
                                                    .txtABeeZeeItalic30
                                                    .copyWith(height: 1.00))),
                                        Container(
                                            margin: getMargin(
                                                left: 21, top: 9, bottom: 9),
                                            padding: getPadding(
                                                left: 11,
                                                top: 3,
                                                right: 14,
                                                bottom: 10),
                                            decoration: AppDecoration
                                                .txtOutlineLightblue90026
                                                .copyWith(
                                                    borderRadius:
                                                        BorderRadiusStyle
                                                            .txtCircleBorder11),
                                            child: Text("lbl_open".tr,
                                                overflow: TextOverflow.ellipsis,
                                                textAlign: TextAlign.left,
                                                style: AppStyle
                                                    .txtABeeZeeItalic9
                                                    .copyWith(height: 1.00))),
                                        CustomIconButton(
                                            height: 40,
                                            width: 40,
                                            margin: getMargin(left: 43),
                                            child: CommonImageView(
                                                svgPath:
                                                    ImageConstant.imgPrinter))
                                      ])))),
                      Container(
                          width: double.infinity,
                          margin: getMargin(left: 17, top: 38, right: 17),
                          decoration: AppDecoration.outlineLightblue90026
                              .copyWith(
                                  borderRadius:
                                      BorderRadiusStyle.roundedBorder20),
                          child: Column(
                              mainAxisSize: MainAxisSize.min,
                              crossAxisAlignment: CrossAxisAlignment.start,
                              mainAxisAlignment: MainAxisAlignment.start,
                              children: [
                                Padding(
                                    padding: getPadding(
                                        left: 20, top: 25, right: 20),
                                    child: Text("lbl_address".tr,
                                        overflow: TextOverflow.ellipsis,
                                        textAlign: TextAlign.left,
                                        style: AppStyle.txtABeeZeeItalic18
                                            .copyWith(height: 1.00))),
                                Container(
                                    width: getHorizontalSize(235.00),
                                    margin: getMargin(
                                        left: 21,
                                        top: 26,
                                        right: 21,
                                        bottom: 38),
                                    child: Text("msg_mr_aatif_rehma".tr,
                                        maxLines: null,
                                        textAlign: TextAlign.left,
                                        style: AppStyle.txtABeeZeeItalic15
                                            .copyWith(height: 1.00)))
                              ])),
                      Container(
                          width: double.infinity,
                          margin: getMargin(left: 17, top: 20, right: 17),
                          decoration: AppDecoration.outlineLightblue90026
                              .copyWith(
                                  borderRadius:
                                      BorderRadiusStyle.roundedBorder20),
                          child: Column(
                              mainAxisSize: MainAxisSize.min,
                              crossAxisAlignment: CrossAxisAlignment.start,
                              mainAxisAlignment: MainAxisAlignment.start,
                              children: [
                                Padding(
                                    padding: getPadding(
                                        left: 20, top: 23, right: 20),
                                    child: Text("msg_aatif_rehman_ca".tr,
                                        overflow: TextOverflow.ellipsis,
                                        textAlign: TextAlign.left,
                                        style: AppStyle.txtABeeZeeItalic15
                                            .copyWith(height: 1.00))),
                                Padding(
                                    padding: getPadding(
                                        left: 21, top: 19, right: 21),
                                    child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.start,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.center,
                                        mainAxisSize: MainAxisSize.max,
                                        children: [
                                          Padding(
                                              padding: getPadding(bottom: 1),
                                              child: Text(
                                                  "lbl_email_address2".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15
                                                      .copyWith(height: 1.00))),
                                          Padding(
                                              padding: getPadding(left: 16),
                                              child: Text(
                                                  "msg_test_yopmail_co".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15Black900
                                                      .copyWith(height: 1.00)))
                                        ])),
                                Padding(
                                    padding: getPadding(
                                        left: 21,
                                        top: 10,
                                        right: 21,
                                        bottom: 28),
                                    child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.start,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.center,
                                        mainAxisSize: MainAxisSize.max,
                                        children: [
                                          Text("lbl_phone".tr,
                                              overflow: TextOverflow.ellipsis,
                                              textAlign: TextAlign.left,
                                              style: AppStyle
                                                  .txtABeeZeeRegular15
                                                  .copyWith(height: 1.00)),
                                          Padding(
                                              padding: getPadding(left: 73),
                                              child: Text("lbl_03001234567".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeRegular15Black900
                                                      .copyWith(height: 1.00)))
                                        ]))
                              ])),
                      Container(
                          width: double.infinity,
                          margin: getMargin(
                              left: 17, top: 18, right: 17, bottom: 23),
                          decoration: AppDecoration.outlineLightblue90026
                              .copyWith(
                                  borderRadius:
                                      BorderRadiusStyle.roundedBorder20),
                          child: Column(
                              mainAxisSize: MainAxisSize.min,
                              crossAxisAlignment: CrossAxisAlignment.start,
                              mainAxisAlignment: MainAxisAlignment.start,
                              children: [
                                Align(
                                    alignment: Alignment.center,
                                    child: Padding(
                                        padding: getPadding(
                                            left: 21, top: 29, right: 21),
                                        child: Obx(() => ListView.builder(
                                            physics: BouncingScrollPhysics(),
                                            shrinkWrap: true,
                                            itemCount: controller.orderModelObj
                                                .value.orderItemList.length,
                                            itemBuilder: (context, index) {
                                              OrderItemModel model = controller
                                                  .orderModelObj
                                                  .value
                                                  .orderItemList[index];
                                              return OrderItemWidget(model);
                                            })))),
                                Align(
                                    alignment: Alignment.centerRight,
                                    child: Container(
                                        width: getHorizontalSize(70.00),
                                        margin: getMargin(
                                            left: 25, top: 41, right: 25),
                                        child: RichText(
                                            text: TextSpan(children: [
                                              TextSpan(
                                                  text: "lbl_total".tr,
                                                  style: TextStyle(
                                                      color: ColorConstant
                                                          .black900,
                                                      fontSize: getFontSize(15),
                                                      fontFamily: 'ABeeZee',
                                                      fontWeight:
                                                          FontWeight.w400,
                                                      height: 0.73)),
                                              TextSpan(
                                                  text: "lbl_5_623_00_pkr".tr,
                                                  style: TextStyle(
                                                      color: ColorConstant
                                                          .black900,
                                                      fontSize: getFontSize(11),
                                                      fontFamily: 'ABeeZee',
                                                      fontWeight:
                                                          FontWeight.w400,
                                                      height: 1.00))
                                            ]),
                                            textAlign: TextAlign.left))),
                                Align(
                                    alignment: Alignment.center,
                                    child: Padding(
                                        padding: getPadding(
                                            left: 21,
                                            top: 73,
                                            right: 20,
                                            bottom: 22),
                                        child: Row(
                                            mainAxisAlignment:
                                                MainAxisAlignment.spaceBetween,
                                            crossAxisAlignment:
                                                CrossAxisAlignment.center,
                                            mainAxisSize: MainAxisSize.max,
                                            children: [
                                              CustomButton(
                                                  width: 154,
                                                  text: "lbl_paid".tr),
                                              CustomButton(
                                                  width: 154,
                                                  text: "lbl_delivered".tr,
                                                  variant: ButtonVariant
                                                      .OutlineBlack900,
                                                  fontStyle: ButtonFontStyle
                                                      .ABeeZeeRegular15)
                                            ])))
                              ]))
                    ])))));
  }

  onTapImgArrowleft() {
    Get.back();
  }
}
