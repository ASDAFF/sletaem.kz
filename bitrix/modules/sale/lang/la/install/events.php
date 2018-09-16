<?
$MESS["SALE_NEW_ORDER_NAME"] = "Nueva orden";
$MESS["SALE_NEW_ORDER_DESC"] = "#ORDER_ID# - ID del pedido
#ORDER_DATE# - fecha del pedido
#ORDER_USER# - Usuario
#EMAIL# - User E-Mail
#BCC# - BCC E-Mail
#ORDER_LIST# - list de pedido
#SALE_EMAIL# - e-mail del departamento de ventas ";
$MESS["SALE_NEW_ORDER_SUBJECT"] = "#SITE_NAME#: Nuevo pedido N#ORDER_ID#";
$MESS["SALE_NEW_ORDER_MESSAGE"] = "Confirmación del pedido de #SITE_NAME#
------------------------------------------";
$MESS["SALE_ORDER_CANCEL_NAME"] = "Anular orden";
$MESS["SALE_ORDER_CANCEL_DESC"] = "#ORDER_ID# - ID del pedido
#ORDER_DATE# - fecha del pedido
#EMAIL# - E-Mail del usuario
#ORDER_CANCEL_DESCRIPTION# - Cancelar descripción del pedido
#SALE_EMAIL# - e-mail del departamento de ventas";
$MESS["SALE_ORDER_CANCEL_SUBJECT"] = "#SITE_NAME#: Pedido N#ORDER_ID# fue cancelado";
$MESS["SALE_ORDER_CANCEL_MESSAGE"] = "Mensaje informativo desde #SITE_NAME#
------------------------------------------";
$MESS["SALE_ORDER_PAID_NAME"] = "Pago del pedido";
$MESS["SALE_ORDER_PAID_DESC"] = "#ORDER_ID# - ID del pedido
#ORDER_DATE# - fecha del pedido
#EMAIL# - E-Mail del usuario
#ORDER_CANCEL_DESCRIPTION# - Cancelar descripción del pedido
#SALE_EMAIL# - e-mail del departamento de ventas";
$MESS["SALE_ORDER_PAID_SUBJECT"] = "#SITE_NAME#: Pedido N#ORDER_ID# fue pagado";
$MESS["SALE_ORDER_PAID_MESSAGE"] = "Mensaje informativo desde  #SITE_NAME#
------------------------------------------";
$MESS["SALE_ORDER_DELIVERY_NAME"] = "Delivery del pedido habilitado";
$MESS["SALE_ORDER_DELIVERY_DESC"] = "#ORDER_ID# - ID del pedido
#ORDER_DATE# - fecha del pedido
#EMAIL# - E-Mail del usuario
#ORDER_CANCEL_DESCRIPTION# - Cancelar descripción del pedido
#SALE_EMAIL# - e-mail del departamento de ventas";
$MESS["SALE_ORDER_DELIVERY_SUBJECT"] = "#SITE_NAME#: Delivery del pedido N#ORDER_ID# está permitido";
$MESS["SALE_ORDER_DELIVERY_MESSAGE"] = "Mensaje informativo desde #SITE_NAME#
------------------------------------------";
$MESS["SALE_RECURRING_CANCEL_NAME"] = "Recurrir a cancelación de pago";
$MESS["SALE_RECURRING_CANCEL_DESC"] = "#ORDER_ID# - ID del pedido
#ORDER_DATE# - fecha del pedido
#EMAIL# - E-Mail del usuario
#ORDER_CANCEL_DESCRIPTION# - Cancelar descripción del pedido
#SALE_EMAIL# - e-mail del departamento de ventas";
$MESS["SALE_RECURRING_CANCEL_SUBJECT"] = "#SITE_NAME#:recurso de pago fue cancelado";
$MESS["SALE_RECURRING_CANCEL_MESSAGE"] = "Mensaje informativo desde #SITE_NAME#
------------------------------------------";
$MESS["SALE_NEW_ORDER_RECURRING_NAME"] = "Nueva Orden Para la Renovación de la Suscripción";
$MESS["SALE_NEW_ORDER_RECURRING_DESC"] = "#ORDER_ID# - pedido ID\\r\\n#ORDER_DATE# - fecha del pedido\\r\\n#ORDER_USER# - cliente\\r\\n#PRICE# - monto del pedido\\r\\n#EMAIL# - correo electrónico del cliente\\r\\n#BCC# - copia oculta dirección de correo electrónico\\r\\n#ORDER_LIST# - order items\\r\\n#SALE_EMAIL# - correo electrónico del depto. de ventas";
$MESS["SALE_NEW_ORDER_RECURRING_SUBJECT"] = "#SITE_NAME#: Nueva ##ORDER_ID# para renovación de la suscripción";
$MESS["SALE_NEW_ORDER_RECURRING_MESSAGE"] = "Information from #SITE_NAME#\\r\\n------------------------------------------\\r\\n\\r\\nEstimado#ORDER_USER#,\\r\\n\\r\\nSu pedido ##ORDER_ID# de #ORDER_DATE# para la renovación de suscripción del pedido.\\r\\n\\r\\nMonto del pedido: #PRICE#.\\r\\n\\r\\nArtículos del pedido:\\r\\n#ORDER_LIST#\\r\\n\\r\\nPuede seguir el estado de su pedido en su área privada en #SITE_NAME#. Tenga en cuenta que tendrá que introducir su nombre de usuario y la contraseña que normalmente utiliza para acceder a #SITE_NAME#.\\r\\n\\r\\nUsted puede Cancelar su pedido en su zona privada en #SITE_NAME#.\\r\\n\\r\\nYusted puede preguntar por su número de orden#ORDER_ID# en todos los mensajes que envíe #SITE_NAME#.\\r\\n\\r\\nGracias por su Compra!";
$MESS["SALE_ORDER_REMIND_PAYMENT_NAME"] = "Recordatorio de Pagos de Pedidos";
$MESS["SALE_ORDER_REMIND_PAYMENT_DESC"] = "#ORDER_ID# - ID del pedido
#ORDER_DATE# - fecha del pedido
#ORDER_USER# - cliente
#PRICE# - monto del pedido
#EMAIL# - e-mail del cliente
#BCC# - copia oculta del correo del cliente
#ORDER_LIST# - artículos del pedido
#SALE_EMAIL# - e-mail del depto. de ventas";
$MESS["SALE_ORDER_REMIND_PAYMENT_SUBJECT"] = "#SITE_NAME#: Recordatorio de pagos de pedidos para  ##ORDER_ID#";
$MESS["SALE_ORDER_REMIND_PAYMENT_MESSAGE"] = "Información de #SITE_NAME#
------------------------------------------

Estimado #ORDER_USER#,
Usted ha colocado un pedido de ##ORDER_ID# of #ORDER_DATE#, monto: #PRICE#.

Por desgracia, parece que su pago no se ha completado. Ninguno de los fondos se han transferido a nuestra cuenta.

Puede seguir el estado de su pedido en su área privada
en#SITE_NAME#. Tenga en cuenta que tendrá que introducir su nombre de usuario
y la contraseña que normalmente utiliza para acceder a #SITE_NAME#.

Usted puede Cancelar su pedido en su área privada en #SITE_NAME#.

Se ruega incluir su número de orden # # ORDER_ID en todos los mensajes que usted envíe al #SITE_NAME# administración.
Gracias por su compra!";
$MESS["UP_TYPE_SUBJECT"] = "Volver a la notificación de stock";
$MESS["UP_TYPE_SUBJECT_DESC"] = "#USER_NAME# - nombre de usuario
#EMAIL# - e-mail del usuario
#NAME# - nombre del producto
#PAGE_URL# - página de información del producto";
$MESS["UP_SUBJECT"] = "#SITE_NAME#: Producto está nuevamente en stock";
$MESS["UP_MESSAGE"] = "Mensaje para #SITE_NAME#
------------------------------------------

Estimado #USER_NAME#,

El producto en el que usted está interesado, \"#NAME#\" (#PAGE_URL#) volverá a estar disponible ahora.
Le recomendamos que realice su pedido (http://#SERVER_NAME#/personal/cart/) tan pronto como sea posible.

Usted está recibiendo este mensaje porque ha pedido que le informemos cuando este producto se encuentre disponible.

Atentamente,

#SITE_NAME# Servicio al Cliente";
$MESS["SALE_SUBSCRIBE_PRODUCT_SUBJECT"] = "#SITE_NAME#: Producto vuelva a estar disponible";
$MESS["SMAIL_FOOTER_BR"] = "Saludos cordiales,<br />personal de apoyo.";
$MESS["SMAIL_FOOTER_SHOP"] = "Tienda web";
$MESS["SALE_NEW_ORDER_HTML_TITLE"] = "Usted ha hecho un pedido con #SITE_NAME#";
$MESS["SALE_NEW_ORDER_HTML_SUB_TITLE"] = "Estimado #ORDER_USER#,";
$MESS["SALE_NEW_ORDER_HTML_TEXT"] = "Nosotros hemos recivido su orden ##ORDER_ID# de #ORDER_DATE#.

Orden total#PRICE#.

Items de la orden:
#ORDER_LIST#

Usted puede hacerle seguimiento a su orden logueándose en su cuenta en #SITE_NAME#. Usted deberá proporcionar su nombre de usuario y contraseña cuando se autorice en #SITE_NAME#.

Si por alguna razón usted requiere Cancelar su orden, use el comando propicio en su cuenta en #SITE_NAME#.

Por favor refierase a su número de orden (##ORDER_ID#) cuando nos contacte.

Gracias por su orden!
";
$MESS["SALE_ORDER_CANCEL_HTML_TITLE"] = "#SITE_NAME#: Pedido cancelado ##ORDER_ID#";
$MESS["SALE_ORDER_CANCEL_HTML_SUB_TITLE"] = "Pedido ##ORDER_ID# of #ORDER_DATE# se ha cancelado.";
$MESS["SALE_ORDER_CANCEL_HTML_TEXT"] = "#ORDER_CANCEL_DESCRIPTION#

Para ver los detalles de su orden, por favor haga click acá: http://#SERVER_NAME#/personal/order/#ORDER_ID#/
";
$MESS["SALE_ORDER_DELIVERY_HTML_TITLE"] = "Su pedido #SITE_NAME# ha sido enviado.";
$MESS["SALE_ORDER_DELIVERY_HTML_SUB_TITLE"] = "Pedido ##ORDER_ID# of #ORDER_DATE# hasido enviado.";
$MESS["SALE_ORDER_DELIVERY_HTML_TEXT"] = "Para ver los detalles de la orden, por favor haga clic aquí: http://#SERVER_NAME#/personal/order/#ORDER_ID#/";
$MESS["SALE_ORDER_PAID_HTML_TITLE"] = "El pago para el pedido #SITE_NAME#";
$MESS["SALE_ORDER_PAID_HTML_SUB_TITLE"] = "Su orden ##ORDER_ID# of #ORDER_DATE# ha sido pagado.";
$MESS["SALE_ORDER_PAID_HTML_TEXT"] = "Para ver los detalles de la orden, por favor haga clic aquí: http://#SERVER_NAME#/personal/order/#ORDER_ID#/";
$MESS["SALE_ORDER_REMIND_PAYMENT_HTML_TITLE"] = "No se olvide de pagar su pedido con #SITE_NAME#";
$MESS["SALE_ORDER_REMIND_PAYMENT_HTML_SUB_TITLE"] = "Estimado #ORDER_USER#,";
$MESS["SALE_ORDER_REMIND_PAYMENT_HTML_TEXT"] = "Usted realizó un orden de compras ##ORDER_ID# por #PRICE# el #ORDER_DATE#.

Desafortunadamente no hemos recibido su pago aún.

Usted puede hacerle seguimiento a su orden logueándose en su cuenta en #SITE_NAME#. Usted deberá proporcionar su nombre de usuario y contraseña cuando se autorice en #SITE_NAME#.

Si por alguna razón usted requiere Cancelar su orden, use el comando propicio en su cuenta en #SITE_NAME#.

Por favor refierase a su número de orden (##ORDER_ID#) cuando nos contacte.

Gracias por su orden!
";
$MESS["SALE_SUBSCRIBE_PRODUCT_HTML_TITLE"] = "Producto vuelva a estar disponible en #SITE_NAME#";
$MESS["SALE_SUBSCRIBE_PRODUCT_HTML_SUB_TITLE"] = "Estimado #USER_NAME#!";
$MESS["SALE_SUBSCRIBE_PRODUCT_HTML_TEXT"] = "\"#NAME#\" (#PAGE_URL#) es ahora disponible en nuestro stock.

Haga click acá para ordenarahora: http://#SERVER_NAME#/personal/cart/

Recuerde auorizarse en el sistema antes de hacer su orden.

Usted recibe esta información debido a que usted solicitó lo mantengamos informacdo acerca de este producto y/o servicio.

Este mensaje es de generación automática, por favor no respona.

Gracias por comprar con nosotros.!
";
$MESS["SKGS_STATUS_MAIL_HTML_TITLE"] = "Orden actualizado el #SITE_NAME#";
$MESS["SALE_ORDER_TRACKING_NUMBER_TYPE_NAME"] = "Notificación de cambio en el número de seguimiento";
$MESS["SALE_ORDER_TRACKING_NUMBER_TYPE_DESC"] = "#ORDER_ID# - número ID de la orden
#ORDER_DATE# - fecha de la orden
#ORDER_USER# - cliente
#ORDER_TRACKING_NUMBER# - número de seguimiento de la orden
#EMAIL# - E-Mail del cliente
#BCC# - E-Mail para la copia oculta
#SALE_EMAIL# - E-Mail del departamento de ventas o asociado ";
$MESS["SALE_ORDER_TRACKING_NUMBER_SUBJECT"] = "Número de seguimiento para su orden en #SITE_NAME#";
$MESS["SALE_ORDER_TRACKING_NUMBER_MESSAGE"] = "La orden N #ORDER_ID# del #ORDER_DATE# fue enviada por mail.

El número de seguimiento es: #ORDER_TRACKING_NUMBER#.

Para mayor información acerca de la orden, vea http://#SERVER_NAME#/personal/order/detail/#ORDER_ID#/

E-mail: #SALE_EMAIL#
";
$MESS["SALE_ORDER_TRACKING_NUMBER_HTML_TITLE"] = "El número envío para su orden en #SITE_NAME#";
$MESS["SALE_ORDER_TRACKING_NUMBER_HTML_SUB_TITLE"] = "Estimado #ORDER_USER#,";
$MESS["SALE_ORDER_TRACKING_NUMBER_HTML_TEXT"] = "Su orden #ORDER_ID# del #ORDER_DATE# fue enviada.

El número de seguimiento es: #ORDER_TRACKING_NUMBER#.

Para mayor detalle acerca de la orden, mire: http://#SERVER_NAME#/personal/order/detail/#ORDER_ID#/

E-mail: #SALE_EMAIL#
";
$MESS["SALE_CHECK_PRINT_TYPE_NAME"] = "Notificación de impresión de recibos";
$MESS["SALE_CHECK_PRINT_TYPE_DESC"] = "#ORDER_ID# - ID de la orde
#ORDER_DATE# - fecha de la orden
#ORDER_USER# - cliente
#ORDER_ACCOUNT_NUMBER_ENCODE# - Id de la orden para uso en enlaces
#CHECK_LINK# - link del recibo";
$MESS["SALE_CHECK_PRINT_SUBJECT"] = "Link del recibo";
$MESS["SALE_CHECK_PRINT_HTML_TITLE"] = "Su pago por la ordende #SITE_NAME#";
$MESS["SALE_CHECK_PRINT_HTML_SUB_TITLE"] = "Negociación #ORDER_USER#,";
$MESS["SALE_CHECK_PRINT_HTML_TEXT"] = "Su pago se ha procesado y se ha creado un recibo respectivo. Para ver el recibo, utilice el enlace:

#CHECK_LINK#

Para obtener más detalles sobre su orden ##ORDER_ID# or #ORDER_DATE# por favor, siga este enlace: http://#SERVER_NAME#/personal/order/detail/#ORDER_ACCOUNT_NUMBER_ENCODE#/
";
$MESS["SALE_ORDER_SHIPMENT_STATUS_CHANGED_SUBJECT"] = "Estado de su envío desde #SITE_NAME# ha actualizado";
$MESS["SALE_ORDER_SHIPMENT_STATUS_CHANGED_HTML_TITLE"] = "Información de seguimiento de su envío desde #SITE_NAME# ha sido actualizado";
$MESS["SALE_ORDER_SHIPMENT_STATUS_CHANGED_HTML_SUB_TITLE"] = "Estimado #ORDER_USER#,";
$MESS["SALE_ORDER_SHIPMENT_STATUS_CHANGED_TYPE_NAME"] = "Actualización del estado del paquete";
$MESS["SALE_ORDER_SHIPMENT_STATUS_CHANGED_TYPE_DESC"] = "#SHIPMENT_NO# - ID del envio
#SHIPMENT_DATE# - enviado el
#ORDER_NO# - # orden
#ORDER_DATE# - fecha de la orden
#STATUS_NAME# - nombre del estado
#STATUS_DESCRIPTION# - descripción de estado
#TRACKING_NUMBER# - el número de rastreo
#EMAIL# - notificar a la dirección de correo electrónico
#BCC# - enviar copia a la dirección
#ORDER_USER# - cliente
#DELIVERY_NAME# - nombre del servicio de entrega
#DELIVERY_TRACKING_URL# - sitio web del servicio de entrega para más detalles de seguimiento
#ORDER_ACCOUNT_NUMBER_ENCODE# - ID de la orden (para enlaces)
#ORDER_DETAIL_URL# - URL de detalles de la orden";
$MESS["SALE_ORDER_SHIPMENT_STATUS_CHANGED_HTML_TEXT"] = "El estado de su envío para el pedido ## ORDER_NO # de # ORDER_DATE # se ha actualizado a

\"# STATUS_NAME #\" (# STATUS_DESCRIPTION #).

Número de seguimiento: # TRACKING_NUMBER #.

Enviado con: # DELIVERY_NAME #.

# DELIVERY_TRACKING_URL ## ORDER_DETAIL_URL #";
?>