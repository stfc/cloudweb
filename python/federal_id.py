#!/usr/bin/env python2

class federal_ids(object):
    """ Example of a class to look up a federal id from an external system"""

    def __init__(self):
        self.results = {
            "givenName": "John",
            "sn": "Smith",
            "department": "Dw",
            "mail": "john.smith@example.com",
        }

    def search(self, fed_id):
        return self.results
