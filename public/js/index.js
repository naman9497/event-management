$(document).ready(function(){
        var ticket_count = 0;

        //Add a new ticket
        $(document).on('click', '.add_tickets', function(){
            ticket_count++;
             var html = `
            <tr>
                <td><input type="text" id="ticket_id"></td>
                <td><input type="text" id="ticket_no"></td>
                <td><input type="text" id="ticket_price"></td>
                <td><button id=ticket_"${ticket_count}" data-count="${ticket_count}" type="button" class="save_btn btn btn-primary">Save</button></td>
              
            </tr>
            `;
            $('.ticket_body').append(html);


        });

        //Save a ticket
        $(document).on('click', '.save_btn', function(){
            var ticket_id = $(this).parent().parent().find('#ticket_id').val();
            var ticket_no = $(this).parent().parent().find('#ticket_no').val();
            var ticket_price = $(this).parent().parent().find('#ticket_price').val();
            var ticket_count = $(this).data('count');

            if(ticket_id == '' || ticket_no == '' || ticket_price == ''){
                $(this).parent().parent().first().append('<span>Please enter all values</span>')
            }else{
                    var html = `
                
                    <td><input type="hidden" name="ticket[${ticket_count}][ticket_id]" value="${ticket_id}">${ticket_id}</td>
                    <td><input type="hidden" name="ticket[${ticket_count}][ticket_no]" value="${ticket_no}">${ticket_no}</td>
                    <td><input type="hidden" name="ticket[${ticket_count}][ticket_price]" value="${ticket_price}">${ticket_price}</td>
                    <td><button type="button" data-count="${ticket_count}" class="btn btn-info edit_ticket">Edit</button>
                    <button type="button"  class="btn btn-danger delete_ticket">Delete</button></td>
    
            
                `;

                $(this).parent().parent().html(html);
            }
        });

        //Delete a ticket
        $(document).on('click', '.delete_ticket', function(){
            // ticket_count--;
            $(this).parent().parent().remove();
        });

        //Edit a ticket
        $(document).on('click', '.edit_ticket', function(){
            var ticket_id = $(this).parent().parent().find("input[name*='ticket_id']").val();
            var ticket_no = $(this).parent().parent().find("input[name*='ticket_no']").val();
            var ticket_price = $(this).parent().parent().find("input[name*='ticket_price']").val();
            var ticket_count = $(this).data('count');

            var html = `
                <td><input type="text" id="ticket_id" value="${ticket_id}"></td>
                <td><input type="text" id="ticket_no" value="${ticket_no}"></td>
                <td><input type="text" id="ticket_price" value="${ticket_price}"></td>
                <td><button id=ticket_"${ticket_count}" data-count="${ticket_count}" type="button" class="save_btn btn btn-primary">Save</button></td>
            `;

            $(this).parent().parent().html(html);
        
        });
});