<template>
    <div class="row">
        <v-head title="Dashboard" />

        <div class="col">
            <div class="card tiles">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <a href="#" class="total-enquiry-data">
                                <div class="tile-stats tile-red">
                                    <div class="icon"><i class="entypo-users"></i></div>
                                    <h3><b>Payable</b></h3>
                                    <div
                                        class="num"
                                        data-start="0"
                                        data-end=""
                                        data-postfix=""
                                        data-duration="1500"
                                        data-delay="0">
                                        <span v-html="stats.payment_outstanding"></span>
                                        <span class="float-right">&#8377;</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3 col-xs-6">
                            <a href="#" class="total-order-data">
                                <div class="tile-stats tile-green">
                                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                                    <h3><b>Receivable</b></h3>
                                    <div
                                        class="num"
                                        data-start="0"
                                        data-end=""
                                        data-postfix=""
                                        data-duration="1500"
                                        data-delay="0">
                                        <span v-html="stats.receivable_outstanding"></span>
                                        <span class="float-right">&#8377;</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3 col-xs-6">
                            <a href="#" class="total-order-data">
                                <div class="tile-stats tile-blue">
                                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                                    <h3><b>Current Month Sales</b></h3>
                                    <div class="num">
                                        <span v-html="stats.monthly_tons"></span>
                                        <span class="float-right">&#8377;</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3 col-xs-6">
                            <a href="#" class="total-order-data">
                                <div class="tile-stats tile-violet">
                                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                                    <h3><b>Current Year Sales</b></h3>
                                    <div
                                        class="num"
                                        data-start="0"
                                        data-end=""
                                        data-postfix=""
                                        data-duration="1500"
                                        data-delay="0">
                                        <span v-html="stats.yearly_tons"></span>
                                        <span class="float-right">&#8377;</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        stats: {
            type: Object,
        },
    },
};
</script>
