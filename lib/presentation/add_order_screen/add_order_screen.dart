import '../add_order_screen/widgets/add_order_item_widget.dart';
import 'controller/add_order_controller.dart';
import 'models/add_order_item_model.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';
import 'package:merchant_app/widgets/custom_button.dart';
import 'package:merchant_app/widgets/custom_icon_button.dart';
import 'package:merchant_app/widgets/custom_text_form_field.dart';

class AddOrderScreen extends GetWidget<AddOrderController> {
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
                      CustomTextFormField(
                          width: 361,
                          focusNode: FocusNode(),
                          controller: controller.groupFifteenController,
                          hintText: "msg_search_select".tr,
                          margin: getMargin(left: 17, top: 23, right: 17),
                          variant: TextFormFieldVariant.OutlineBlack9007e),
                      CustomTextFormField(
                          width: 361,
                          focusNode: FocusNode(),
                          controller: controller.group9302Controller,
                          hintText: "msg_search_add_pr".tr,
                          margin: getMargin(left: 17, top: 15, right: 17),
                          variant: TextFormFieldVariant.OutlineBlack9007e),
                      Container(
                          width: double.infinity,
                          margin: getMargin(left: 17, top: 39, right: 17),
                          decoration: AppDecoration.outlineLightblue90026
                              .copyWith(
                                  borderRadius:
                                      BorderRadiusStyle.roundedBorder20),
                          child: Column(
                              mainAxisSize: MainAxisSize.min,
                              crossAxisAlignment: CrossAxisAlignment.end,
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
                                            itemCount: controller
                                                .addOrderModelObj
                                                .value
                                                .addOrderItemList
                                                .length,
                                            itemBuilder: (context, index) {
                                              AddOrderItemModel model =
                                                  controller
                                                      .addOrderModelObj
                                                      .value
                                                      .addOrderItemList[index];
                                              return AddOrderItemWidget(model);
                                            })))),
                                Padding(
                                    padding: getPadding(
                                        left: 37, top: 32, right: 37),
                                    child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.end,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.center,
                                        mainAxisSize: MainAxisSize.min,
                                        children: [
                                          Text("lbl_discount".tr,
                                              overflow: TextOverflow.ellipsis,
                                              textAlign: TextAlign.left,
                                              style: AppStyle.txtABeeZeeItalic10
                                                  .copyWith(height: 1.00)),
                                          Padding(
                                              padding: getPadding(left: 45),
                                              child: Text("lbl_00_pkr".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeItalic10
                                                      .copyWith(height: 1.00)))
                                        ])),
                                Padding(
                                    padding: getPadding(
                                        left: 31, top: 19, right: 31),
                                    child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.end,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.center,
                                        mainAxisSize: MainAxisSize.min,
                                        children: [
                                          Text("lbl_tax_7".tr,
                                              overflow: TextOverflow.ellipsis,
                                              textAlign: TextAlign.left,
                                              style: AppStyle.txtABeeZeeItalic10
                                                  .copyWith(height: 1.00)),
                                          Padding(
                                              padding: getPadding(left: 51),
                                              child: Text("lbl_123_pkr".tr,
                                                  overflow:
                                                      TextOverflow.ellipsis,
                                                  textAlign: TextAlign.left,
                                                  style: AppStyle
                                                      .txtABeeZeeItalic10
                                                      .copyWith(height: 1.00)))
                                        ])),
                                Container(
                                    width: getHorizontalSize(70.00),
                                    margin: getMargin(
                                        left: 25,
                                        top: 6,
                                        right: 25,
                                        bottom: 29),
                                    child: RichText(
                                        text: TextSpan(children: [
                                          TextSpan(
                                              text: "lbl_total".tr,
                                              style: TextStyle(
                                                  color: ColorConstant.black900,
                                                  fontSize: getFontSize(15),
                                                  fontFamily: 'ABeeZee',
                                                  fontWeight: FontWeight.w400,
                                                  height: 0.73)),
                                          TextSpan(
                                              text: "lbl_5_623_00_pkr".tr,
                                              style: TextStyle(
                                                  color: ColorConstant.black900,
                                                  fontSize: getFontSize(11),
                                                  fontFamily: 'ABeeZee',
                                                  fontWeight: FontWeight.w400,
                                                  height: 1.00))
                                        ]),
                                        textAlign: TextAlign.left))
                              ])),
                      CustomTextFormField(
                          width: 222,
                          focusNode: FocusNode(),
                          controller: controller.group9303Controller,
                          hintText: "lbl_promotion_code".tr,
                          margin: getMargin(left: 25, top: 15, right: 25),
                          variant: TextFormFieldVariant.OutlineBlack9007e,
                          textInputAction: TextInputAction.done,
                          alignment: Alignment.centerLeft),
                      Padding(
                          padding: getPadding(
                              left: 17, top: 44, right: 17, bottom: 26),
                          child: Row(
                              mainAxisAlignment: MainAxisAlignment.spaceBetween,
                              crossAxisAlignment: CrossAxisAlignment.center,
                              mainAxisSize: MainAxisSize.max,
                              children: [
                                CustomButton(width: 154, text: "lbl_paid".tr),
                                CustomButton(
                                    width: 154,
                                    text: "lbl_delivered".tr,
                                    variant: ButtonVariant.OutlineBlack900,
                                    fontStyle: ButtonFontStyle.ABeeZeeRegular15)
                              ]))
                    ])))));
  }

  onTapImgArrowleft() {
    Get.back();
  }
}
