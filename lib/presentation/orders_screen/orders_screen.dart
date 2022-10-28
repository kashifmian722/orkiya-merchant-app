import '../orders_screen/widgets/orders_item_widget.dart';
import 'controller/orders_controller.dart';
import 'models/orders_item_model.dart';
import 'package:flutter/material.dart';
import 'package:merchant_app/core/app_export.dart';
import 'package:merchant_app/widgets/custom_button.dart';

class OrdersScreen extends GetWidget<OrdersController> {
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
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: [
                      Align(
                          alignment: Alignment.centerLeft,
                          child: Container(
                              width: size.width,
                              margin: getMargin(top: 38),
                              child: Padding(
                                  padding: getPadding(left: 25, right: 16),
                                  child: Row(
                                      mainAxisAlignment:
                                          MainAxisAlignment.spaceBetween,
                                      crossAxisAlignment:
                                          CrossAxisAlignment.start,
                                      mainAxisSize: MainAxisSize.max,
                                      children: [
                                        Padding(
                                            padding:
                                                getPadding(top: 3, bottom: 16),
                                            child: Row(
                                                crossAxisAlignment:
                                                    CrossAxisAlignment.center,
                                                mainAxisSize: MainAxisSize.min,
                                                children: [
                                                  Padding(
                                                      padding: getPadding(
                                                          top: 7, bottom: 8),
                                                      child: InkWell(
                                                          onTap: () {
                                                            onTapImgArrowleft();
                                                          },
                                                          child: CommonImageView(
                                                              svgPath: ImageConstant
                                                                  .imgArrowleft,
                                                              height:
                                                                  getVerticalSize(
                                                                      14.00),
                                                              width:
                                                                  getHorizontalSize(
                                                                      20.00)))),
                                                  Padding(
                                                      padding:
                                                          getPadding(left: 18),
                                                      child: Text(
                                                          "lbl_orders".tr,
                                                          overflow: TextOverflow
                                                              .ellipsis,
                                                          textAlign:
                                                              TextAlign.left,
                                                          style: AppStyle
                                                              .txtABeeZeeItalic30
                                                              .copyWith(
                                                                  height:
                                                                      1.00)))
                                                ])),
                                        CustomButton(
                                            width: 178,
                                            text: "lbl_add_order".tr)
                                      ])))),
                      Container(
                          margin: getMargin(
                              left: 17, top: 10, right: 17, bottom: 65),
                          decoration: AppDecoration.outlineLightblue90026
                              .copyWith(
                                  borderRadius:
                                      BorderRadiusStyle.roundedBorder20),
                          child: Obx(() => ListView.builder(
                              physics: BouncingScrollPhysics(),
                              shrinkWrap: true,
                              itemCount: controller
                                  .ordersModelObj.value.ordersItemList.length,
                              itemBuilder: (context, index) {
                                OrdersItemModel model = controller
                                    .ordersModelObj.value.ordersItemList[index];
                                return OrdersItemWidget(model);
                              })))
                    ])))));
  }

  onTapImgArrowleft() {
    Get.back();
  }
}
